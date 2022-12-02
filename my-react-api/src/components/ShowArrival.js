import React, {useEffect, useState}  from 'react'
import axios from 'axios';
import {Link} from 'react-router-dom';


const apiurl = 'http://localhost:8000/api';
const ShowArrival = () => {
    const [arrivals, setArrival] = useState([]);

    useEffect( () => {
        getAllArrivals();
    },[]);

    const getAllArrivals = async () => {
        const resArrival = await axios.get(`${apiurl}/arrival`);
        setArrival(resArrival.data);
    }

    const deleteArrival = async (id) => {
        await axios.delete(`${apiurl}/arrival/${id}`);
        getAllArrivals();
    }

  return (
    <div className="container-md">
        <h3 class="text-center">ARRIVALS</h3>
            <table className="table table-bordered table-info">
                <thead className="bg-info">
                    <tr>
                    <th>Arrival Place</th>
                    <th>Address</th>
                    <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {arrivals.map( (arrival) => (
                        <tr key={arrival.id}>
                            <td>{arrival.arrivalPlace}</td>
                             <td>{arrival.arrivalAddress}</td>
                             <td>
                                <Link to={`../EditArrival/${arrival.id}`} className="btn btn-warning btn-ms">EDIT</Link>
                                <button onClick={ ()=> deleteArrival(arrival.id) } className="btn btn-warning btn-ms" >DELETE</button>
                            </td>
                             
                        </tr>
                    
                    )
                    )}
                </tbody>
            </table>
            <Link to="../CreateArrival" className="btn btn-warning btn-ms">ADD NEW ARRIVAL</Link>
            <Link to="../" className="btn btn-warning btn-ms">RETURN</Link>
    </div>
  )
}

export default ShowArrival