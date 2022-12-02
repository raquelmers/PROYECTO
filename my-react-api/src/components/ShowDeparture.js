import React, {useEffect, useState} from 'react';
import axios from 'axios';
import {Link} from 'react-router-dom';

const apiurl = 'http://localhost:8000/api';
const ShowDeparture = () => {
    const [departures, setDepartures] = useState ([]);

    useEffect ( () => {
        getAllDepartures();
    }, []);

    const getAllDepartures = async () => {
        const resDepart = await axios.get(`${apiurl}/departure`);
        setDepartures(resDepart.data);
    }

    const deleteDeparture = async (id) => {
        await axios.delete(`${apiurl}/departure/${id}`);
        getAllDepartures();
    }

  return (
    <div className="container-md">
        <h3 class="text-center">DEPARTURES</h3>
            <table className="table table-bordered table-info">
                <thead className="bg-info">
                    <tr>
                    <th>Departure Place</th>
                    <th>Address</th>
                    <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {departures.map( (depart) => (
                        <tr key={depart.id}>
                            <td>{depart.departPlace}</td>
                             <td>{depart.departAddress}</td>
                             <td>
                                <Link to={`../EditDeparture/${depart.id}`} className="btn btm-sm btn-warning">EDIT</Link>
                                <button onClick={ ()=> deleteDeparture(depart.id) } className="btn btn-warning btn-ms" >DELETE</button>
                            </td>
                        </tr>
                    )
                    )}
                </tbody>
            </table>
            <Link to="../CreateDeparture" className="btn btn-warning">ADD NEW DEPARTURE</Link>
            <Link to="../" className="btn btn-warning">RETURN</Link>
    </div>
  )
}

export default ShowDeparture