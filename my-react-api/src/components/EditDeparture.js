import React, {useState, useEffect} from 'react';
import axios from 'axios';
import { useNavigate, useParams, Link } from 'react-router-dom';

const apiurl = 'http://localhost:8000/api/departure/';
const EditDeparture = () => {
    const [departPlace, setDepartPlace] = useState('');
    const [departAddress, setDepartAddress] = useState('');
    const navigate = useNavigate();
    const {id} = useParams();

    const update = async (e) => {
        e.preventDefault();
        await axios.put(`${apiurl}${id}`, 
        {departPlace:departPlace, departAddress:departAddress});
        navigate('../ShowDeparture');
    }

    useEffect( () => {
        const getDepartureById = async () => {
            const resDepart = await axios.get(`${apiurl}${id}`);
            setDepartPlace (resDepart.data.departPlace);
            setDepartAddress (resDepart.data.departAddress);
        }
        getDepartureById();
        // eslint-disable-next-line react-hooks/exhaustive-deps
    }, []);

  return (
    <div className="container-sm col-4 bg-light">
    <div className="col-sm-12 p-2 mx-auto">
        <h5>EDIT DEPARTURE</h5>
        <form onSubmit={update}>
        <div className='mb-3'>
                <label className='form-label'>Name Place</label>
                <input
                value={departPlace}
                onChange={ (b)=> setDepartPlace(b.target.value)}
                type='text'
                className='form-control'
                />
            </div>
            <div className='mb-3'>
                <label className='form-label'>Address</label>
                <input
                value={departAddress}
                onChange={ (b)=> setDepartAddress(b.target.value)}
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

export default EditDeparture