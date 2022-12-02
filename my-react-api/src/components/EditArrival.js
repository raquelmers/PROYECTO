import React, {useState, useEffect} from 'react';
import axios from 'axios';
import { useNavigate, useParams, Link } from 'react-router-dom';

const apiurl = 'http://localhost:8000/api/arrival/';
const EditArrival = () => {
    const [arrivalPlace, setArrivalPlace] = useState('');
    const [arrivalAddress, setArrivalAddress] = useState('');
    const navigate = useNavigate();
    const {id} = useParams();

    const update = async (e) => {
        e.preventDefault();
        await axios.put(`${apiurl}${id}`, 
        {arrivalPlace:arrivalPlace, arrivalAddress:arrivalAddress});
        navigate('../ShowArrival');
    }

    useEffect( () => {
        const getBusById = async () => {
            const resArrival = await axios.get(`${apiurl}${id}`);
            setArrivalPlace (resArrival.data.arrivalPlace);
            setArrivalAddress (resArrival.data.arrivalAddress);
        }
        getBusById();
        // eslint-disable-next-line react-hooks/exhaustive-deps
    }, []);

  return (
    <div className="container-sm col-4 bg-light">
    <div className="col-sm-12 p-2 mx-auto">
        <h5>EDIT ARRIVAL</h5>
        <form onSubmit={update}>
        <div className='mb-3'>
                <label className='form-label'>Name Place</label>
                <input
                value={arrivalPlace}
                onChange={ (b)=> setArrivalPlace(b.target.value)}
                type='text'
                className='form-control'
                />
            </div>
            <div className='mb-3'>
                <label className='form-label'>Address</label>
                <input
                value={arrivalAddress}
                onChange={ (b)=> setArrivalAddress(b.target.value)}
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

export default EditArrival