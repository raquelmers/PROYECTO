import React, {useState} from 'react';
import axios from 'axios';
import {useNavigate, Link} from 'react-router-dom';

const CreateTravel = () => {
    const [idBus, setIdBus] = useState(0);
    const [idDeparture, setIdDeparture] = useState(0);
    const [idArrival, setIdArrival] = useState(0);
    const [timeTravel, setTimeTravel] = useState('');
    const [typeTravel, setTypeTravel] = useState('');
    const [fareTravel, setFareTravel] = useState(0);
    const navigate = useNavigate();


    const store = async (t) => {
        t.preventDefault();
        await axios.post(`http://localhost:8000/api/travel`,
        {idBus: idBus, idDeparture: idDeparture, idArrival: idArrival, timeTravel:timeTravel, typeTravel: typeTravel, fareTravel:fareTravel});
        navigate('/');
    }


  return (
    <div id="form" className="container-sm col-4 bg-light">
        <div className="col-sm-12 p-2 mx-auto">
            <h5>NEW TRAVEL</h5>
            <form onSubmit={store}>
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

export default CreateTravel