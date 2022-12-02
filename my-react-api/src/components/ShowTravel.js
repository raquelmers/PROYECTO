import React, {useEffect, useState} from 'react';
import axios from 'axios';
import {Link} from 'react-router-dom';

const apiurl = 'http://localhost:8000/api';

const ShowTravel = () => {
    const [travels, setTravel] = useState([]);
    useEffect ( () => {
        getAllTravels();
    }, []);

    const getAllTravels = async () => {
        const resTravel = await axios.get(`${apiurl}/travel`);
        setTravel(resTravel.data);
    }

    const deleteTravel = async (id) => {
        await axios.delete(`${apiurl}/travel/${id}`);
        getAllTravels();
    }

        // eslint-disable-next-line
            return (
                <div className="container-md">
                    <h3 class="text-center">AVAILABLE TRAVELS</h3>
                    <table className="table table-bordered table-info">
                        <thead className="bg-info">
                            <tr>
                                <th>Num. Bus</th>
                                <th>Journey</th>
                                <th>Schedule</th>
                                <th>Type of Travel</th>
                                <th>Fare</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            {travels.map( (travel) => (
                                <tr key={travel.id}>
                                    <td>{travel.bus.nameBus}</td>
                                     <td>{travel.departure.departPlace} - {travel.arrival.arrivalPlace}</td>
                                     <td>Date: {travel.dateTravel} | Time: {travel.timeTravel}</td>
                                     <td>{travel.typeTravel}</td>
                                     <td>$ {travel.fareTravel}</td>
                                     <td>
                                        <Link to={`EditTravel/${travel.id}`} className="btn btn-warning btn-ms">EDIT</Link>
                                        <button onClick={ ()=> deleteTravel(travel.id) } className="btn btn-warning btn-ms" >DELETE</button>
                                     </td>
                                </tr>
                            ))}
                            <Link to="CreateTravel" className="btn btn-warning btn-ms">ADD TRAVEL</Link>
                        </tbody>
                    </table>
                    <div id="manage" className="container-sm col-3 bg-light">
                        <h4>MANAGEMENT</h4>
                        <Link to="ShowBuses" className="btn btn-warning btn-ms">BUSES</Link>
                        <Link to="ShowDeparture" className="btn btn-warning btn-ms">DEPARTURES</Link>
                        <Link to="ShowArrival" className="btn btn-warning btn-ms">ARRIVALS</Link>
                    </div>
                </div>
            )
}

export default ShowTravel