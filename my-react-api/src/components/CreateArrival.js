import React, {useState} from 'react';
import axios from 'axios';
import {useNavigate, Link} from 'react-router-dom';

const CreateArrival = () => {
    const [arrivalPlace, setArrivalPlace] = useState('');
    const [arrivalAddress, setArrivalAddress] = useState('');
    const navigate = useNavigate();

    const store = async (d) => {
        d.preventDefault();
        await axios.post(`http://localhost:8000/api/arrival`,{arrivalPlace: arrivalPlace, arrivalAddress: arrivalAddress});
        navigate('../ShowArrival');
    }

  return (
    <div className="container-sm col-4 bg-light">
        <div className="col-sm-12 p-2 mx-auto">
            <h5>NEW ARRIVAL</h5>
            <form onSubmit={store}>
                <div className='mb-3'>
                    <label className='form-label'>Name Place</label>
                    <input
                    value={arrivalPlace}
                    onChange={ (d)=> setArrivalPlace(d.target.value)}
                    type='text'
                    className='form-control'
                    />
                </div>
                <div className='mb-3'>
                    <label className='form-label'>Address</label>
                    <input
                    value={arrivalAddress}
                    onChange={ (d)=> setArrivalAddress(d.target.value)}
                    type='text'
                    className='form-control'
                    />
                </div>
                <button type='submit' className="btn btn-warning">SAVE</button>
                <Link to="../ShowArrival" className="btn btn-warning">RETURN</Link>
                <Link to="/" className="btn btn-warning">GO TO MAIN PAGE</Link>
            </form>
        </div>
    </div>

  )
}

export default CreateArrival