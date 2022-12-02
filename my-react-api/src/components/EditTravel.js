import React, {useState, useEffect} from 'react';
import axios from 'axios';
import { useNavigate, useParams, Link } from 'react-router-dom';

const apiurl = 'http://localhost:8000/api/bus/';
const EditTravel = () => {
    const [idBus, setIdBus] = useState(0);
    const [idDeparture, setIdDeparture] = useState(0);
    const [idArrival, setIdArrival] = useState(0);
    const [timeTravel, setTimeTravel] = useState(0);
    const [typeTravel, setTypeTravel] = useState('');
    const [fareTravel, setFareTravel] = useState(0.0);
    const navigate = useNavigate();
    const {id} = useParams();

    const update = async (t) => {
        t.preventDefault();
        await axios.put(`${apiurl}${id}`,
        {idBus: idBus, idDeparture: idDeparture, idArrival: idArrival, timeTravel:timeTravel, typeTravel: typeTravel, fareTravel:fareTravel});
        navigate('/');
    }

    useEffect( () => {
            const getTravelById = async () => {
            const resTravel = await axios.get(`${apiurl}${id}`);
            setIdBus (resTravel.data.idBus);
            setIdDeparture (resTravel.data.idDeparture);
            setIdArrival (resTravel.data.idArrival);
            setTimeTravel (resTravel.data.timeTravel);
            setTypeTravel (resTravel.data.typeTravel);
            setFareTravel (resTravel.data.fareTravel);
        }
        getTravelById();
        // eslint-disable-next-line react-hooks/exhaustive-deps
    }, []);

  return (
    <div id="form" className="container-sm col-4 bg-light">
        <div className="col-sm-12 p-2 mx-auto">
            <h5>EDIT TRAVEL</h5>
            <form onSubmit={update}>
            <div className='mb-3'>
                    <label className='form-label'>Route</label>
                    <input
                    value={idBus}
                    onChange={ (t)=> setIdBus(t.target.value)}
                    type='text'
                    className='form-control'
                    />
                </div>
                <div className='mb-3'>
                    <label className='form-label'>Departure</label>
                    <input
                    value={idDeparture}
                    onChange={ (t)=> setIdDeparture(t.target.value)}
                    type='text'
                    className='form-control'
                    />
                </div>
                <div className='mb-3'>
                    <label className='form-label'>Arrival</label>
                    <input
                    value={idArrival}
                    onChange={ (t)=> setIdArrival(t.target.value)}
                    type='text'
                    className='form-control'
                    />
                </div>
                <div className='mb-3'>
                    <label className='form-label'>Time</label>
                    <input
                    value={timeTravel}
                    onChange={ (t)=> setTimeTravel(t.target.value)}
                    type='text'
                    className='form-control'
                    />
                </div>
                <div className='mb-3'>
                    <label className='form-label'>Type of Travel</label>
                    <input
                    value={typeTravel}
                    onChange={ (t)=> setTypeTravel(t.target.value)}
                    type='text'
                    className='form-control'
                    />
                </div>
                <div className='mb-3'>
                    <label className='form-label'>Fare</label>
                    <input
                    value={fareTravel}
                    onChange={ (t)=> setFareTravel(t.target.value)}
                    type='text'
                    className='form-control'
                    />
                </div>
                <button type='submit' className="btn btn-warning btn-ms">SAVE</button>
                <Link to="/" className="btn btn-warning btn-ms">RETURN</Link>
            </form>
        </div>

    </div>
  )
}

export default EditTravel