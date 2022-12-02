import React, {useState} from 'react';
import axios from 'axios';
import {useNavigate, Link} from 'react-router-dom';

const CreateBus = () => {
    const [busPlate, setBusPlate] = useState('');
    const [nameBus, setNameBus] = useState('');
    const [seats, setSeats] = useState(0);
    const navigate = useNavigate();

    const store = async (b) => {
        b.preventDefault();
        await axios.post(`http://localhost:8000/api/bus`,
        {busPlate:busPlate, nameBus:nameBus, seats:seats});
        navigate('../ShowBuses');
    }

  return (
    <div className="container-sm col-4 bg-light">
        <div className="col-sm-12 p-2 mx-auto">
            <h5>NEW BUS</h5>
            <form onSubmit={store}>
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
                <button type='submit' className="btn btn-warning">SAVE</button>
                <Link to="../ShowBuses" className="btn btn-warning">RETURN</Link>
                <Link to="/" className="btn btn-warning">GO TO MAIN PAGE</Link>
            </form>
        </div>
    </div>
  )
}

export default CreateBus