import React, {useState} from 'react';
import axios from 'axios';
import {useNavigate, Link} from 'react-router-dom';

const CreateDeparture = () => {
    const [departPlace, setDepartPlace] = useState('');
    const [departAddress, setDepartAddress] = useState('');
    const navigate = useNavigate();

    const store = async (d) => {
        d.preventDefault();
        await axios.post(`http://localhost:8000/api`,{departPlace: departPlace, departAddress: departAddress});
        navigate('/');
    }

  return (
    
        <div className="container-sm col-4 bg-light">
        <div className="col-sm-12 p-2 mx-auto">
            <h5>NEW DEPARTURE</h5>
            <form onSubmit={store}>
                <div className='mb-3'>
                    <label className='form-label'>Name Place</label>
                    <input
                    value={departPlace}
                    onChange={ (d)=> setDepartPlace(d.target.value)}
                    type='text'
                    className='form-control'
                    />
                </div>
                <div className='mb-3'>
                    <label className='form-label'>Address</label>
                    <input
                    value={departAddress}
                    onChange={ (d)=> setDepartAddress(d.target.value)}
                    type='text'
                    className='form-control'
                    />
                </div>
                <button type='submit' className="btn btn-warning">SAVE</button>
                <Link to="../ShowDeparture" className="btn btn-warning">RETURN</Link>
                <Link to="/" className="btn btn-warning">GO TO MAIN PAGE</Link>
            </form>
        </div>
    </div>
  )
}

export default CreateDeparture