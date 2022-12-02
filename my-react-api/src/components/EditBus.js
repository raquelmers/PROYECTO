import React, {useState, useEffect} from 'react';
import axios from 'axios';
import { useNavigate, useParams, Link } from 'react-router-dom';

const apiurl = 'http://localhost:8000/api/bus/';
const EditBus = () => {
    const [busPlate, setBusPlate] = useState('');
    const [nameBus, setNameBus] = useState('');
    const [seats, setSeats] = useState(0);
    const navigate = useNavigate();
    const {id} = useParams();

    const update = async (e) => {
        e.preventDefault();
        await axios.put(`${apiurl}${id}`, 
        {busPlate:busPlate, nameBus:nameBus, seats:seats});
        navigate('../ShowBuses');
    }

    useEffect( () => {
        const getBusById = async () => {
            const resBus = await axios.get(`${apiurl}${id}`);
            setBusPlate (resBus.data.busPlate);
            setNameBus (resBus.data.nameBus);
            setSeats (resBus.data.seats);
        }
        getBusById();
        // eslint-disable-next-line react-hooks/exhaustive-deps
    }, []);
    
  return (
    <div id="form" className="container-sm col-4 bg-light">
        <div className="col-sm-12 p-2 mx-auto">
        <h5>EDIT BUS</h5>
        <form onSubmit={update}>
        <div className='mb-3'>
                <label className='form-label'>Bus Plate</label>
                <input
                value={busPlate}
                onChange={ (b)=> setBusPlate(b.target.value)}
                type='text'
                className='form-control'
                />
            </div>
            <div className='mb-3'>
                <label className='form-label'>Name Bus</label>
                <input
                value={nameBus}
                onChange={ (b)=> setNameBus(b.target.value)}
                type='text'
                className='form-control'
                />
            </div>
            <div className='mb-3'>
                <label className='form-label'>Number of Seats</label>
                <input
                value={seats}
                onChange={ (b)=> setSeats(b.target.value)}
                type='text'
                className='form-control'
                />
            </div>
            <button type='submit' className="btn btn-warning btn-ms">SAVE</button>
            <Link to="../ShowBuses" className="btn btn-warning btn-ms">RETURN</Link>
            <Link to="/" className="btn btn-warning">GO TO MAIN PAGE</Link>
        </form>
        </div>

    </div>
  )
}

export default EditBus