import './App.css';
import { BrowserRouter, Routes, Route } from 'react-router-dom';
import ShowTravel from './components/ShowTravel';
import ShowBuses from './components/ShowBuses';
import ShowDeparture from './components/ShowDeparture';
import ShowArrival from './components/ShowArrival';
import CreateDeparture from './components/CreateDeparture';
import CreateArrival from './components/CreateArrival';
import CreateTravel from './components/CreateTravel';
import CreateBus from './components/CreateBus';
import EditBus from './components/EditBus';
import EditDeparture from './components/EditDeparture';
import EditArrival from './components/EditArrival';
import EditTravel from './components/EditTravel';


function App() {
  return (
    <div className="App">
      <BrowserRouter>
        <Routes>
          <Route path='/' element={<ShowTravel/>} />
          <Route path='/ShowBuses' element={<ShowBuses/>} />
          <Route path='/ShowDeparture' element={<ShowDeparture/>} />
          <Route path='/ShowArrival' element={<ShowArrival/>} />
          <Route path='/CreateTravel' element={<CreateTravel/>} />
          <Route path='/CreateDeparture' element={<CreateDeparture/>} />
          <Route path='/CreateArrival' element={<CreateArrival/>} />
          <Route path='/CreateBus' element={<CreateBus/>} />
          <Route path='/EditBus/:id' element={<EditBus/>} />
          <Route path='/EditDeparture/:id' element={<EditDeparture/>} />
          <Route path='/EditArrival/:id' element={<EditArrival/>} />
          <Route path='/EditTravel/:id' element={<EditTravel/>} />
        </Routes>
      </BrowserRouter>
    </div>
  );
}

export default App;



