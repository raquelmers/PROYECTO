import React, {useEffect, useState} from 'react';
import axios from 'axios';
import {Link} from 'react-router-dom';

const apiurl = 'http://localhost:8000/api';
const ShowBuses = () => {
    const [buses, setBuses] = useState([]);

    useEffect( () => {
        getAllBuses();
    }, []);

    const getAllBuses = async () => {
        const resBus = await axios.get(`${apiurl}/bus`);
        setBuses(resBus.data);
    }

    const deleteBus = async (id) => {
        await axios.delete(`${apiurl}/bus/${id}`);
        getAllBuses();
    }

  return (
    <div className="container-md">
        <h3 class="text-center">BUSES</h3>
            <table className="table able-bordered table-info">
                <thead className="bg-info">
                    <tr>
                    <th>Bus Plate</th>
                    <th>Name Bus</th>
                    <th>Number of Seats</th>
                    <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {buses.map( (bus) => (
                        <tr key={bus.id}>
                            <td>{bus.busPlate}</td>
                             <td>{bus.nameBus}</td>
                             <td>{bus.seats}</td>
                             <td>
                                <Link to={`../EditBus/${bus.id}`} className="btn btm-sm btn-warning">EDIT</Link>
                                <button onClick={ ()=> deleteBus(bus.id) } className="btn btn-warning btn-ms" >DELETE</button>
                             </td>
                        </tr>
                    
                    )
                    )}
                </tbody>
            </table>
            <Link to="../CreateBus" className="btn btn-warning btn-ms">ADD NEW BUS</Link>
            <Link to="../" className="btn btn-warning btn-ms">RETURN</Link>
        </div> 
  )
}

export default ShowBuses