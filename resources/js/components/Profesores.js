import React, { Component } from 'react';
import ReactDOM from 'react-dom';

import { ToastContainer, toast } from 'react-toastify';
import 'react-toastify/dist/ReactToastify.css';

import axios from 'axios';
import DataTable, { createTheme } from 'react-data-table-component';
import 'antd/dist/antd.css';
import { Button, DatePicker, version } from "antd";


class Profesores extends Component {
    constructor(props) {
        super(props);
        this.state = {
            profesores:[],
            errorMsg: '',
            form: {
              id:'',
              nombre:'',
              ap_paterno:'',
              ap_materno:'',
              genero_id:'',
              telefono:'',
              red_social:''
            },
            tipoModal:''
        }
        this.handleChange = this.handleChange.bind(this);
        this.opModal = this.opModal.bind(this);
    }

    async handleChange(e) {
      await this.setState({
        form:{
          ...this.state.form, //heredar todos los atributos que existan en el form y no los borre al momento de escribir
          [e.target.name]: e.target.value  // de acuerdo al nombre del input es como lo guardará en el estado
        }
      });
      // console.log(this.state.form);
    }

    seleccionarProfesor(profesor){
        this.setState({
          tipoModal: 'actualizar',
          form:{
            id: profesor.id,
            nombre:profesor.nombre,
            ap_paterno:profesor.ap_paterno,
            ap_materno:profesor.ap_materno == null ? '':profesor.ap_materno,
            genero_id:profesor.genero_id,
            telefono:profesor.telefono == null ? '':profesor.telefono,
            red_social:profesor.red_social == null ? '':profesor.red_social
          }
        });
        // console.log(this.state);
    }

    opModal(){
      this.setState({
        tipoModal: 'insertar',
        form:{
          nombre:'',
          ap_paterno:'',
          ap_materno:'',
          genero_id:'',
          telefono:'',
          red_social:''
        }
      });
      // console.log(this.state);
    }

    getProfesores() {
      axios.get('http://localhost:8000/profesores')
       .then(response => {
          //  console.log(response);
           this.setState({profesores: response.data});
       })
       .catch(error => {
        // console.log(error);
        this.setState({errorMsg: 'Error retreiving data: URL fail get'})
       })
    }

    async insertProfesor(){
      await axios.post('http://localhost:8000/profesores', this.state.form)
       .then(response => {
        // console.log(response);
        toast.success(response.data.msg, {
          position: "top-right",
          autoClose: 5000,
          hideProgressBar: false,
          closeOnClick: true,
          pauseOnHover: true,
          draggable: true,
          progress: undefined,
          });
        this.getProfesores();
        $("#profModal").modal("hide");
       }).catch(error => {
        console.log(error);
       })
    }

    updateProfesor(){
      axios.put('http://localhost:8000/profesores/'+this.state.form.id, this.state.form)
       .then(response => {
         // console.log(response);
        toast.success(response.data.msg, {
          position: "top-right",
          autoClose: 5000,
          hideProgressBar: false,
          closeOnClick: true,
          pauseOnHover: true,
          draggable: true,
          progress: undefined,
          });
        this.getProfesores();
        $("#profModal").modal("hide");
       }).catch(error => {
        // console.log(error);
       })
    }

    async deleteProfesor(){
      await axios.post('http://localhost:8000/profesores/delete', this.state.form)
       .then(response => {
        // console.log(response);
        toast.success(response.data.msg, {
          position: "top-right",
          autoClose: 5000,
          hideProgressBar: false,
          closeOnClick: true,
          pauseOnHover: true,
          draggable: true,
          progress: undefined,
          });
        this.getProfesores();
        $("#profDeleteModal").modal("hide");
       }).catch(error => {
        console.log(error);
       })
    }
    
    componentDidMount() {

      this.getProfesores();
    }

    componentDidUpdate(){

    }

    componentWillUnmount() {  
    }

    render() {
        const {profesores, errorMsg} = this.state
        const {form} = this.state; 

        return (
          <div>

                <Button type="primary">
                  Button Ant
                </Button>
            
                <h1>PROFESORES</h1>
                <button type="button" className="btn btn-info" data-toggle="modal" data-target="#profModal" onClick={this.opModal}>
                    <span><i className="fas fa-running"></i></span> NUEVO PROFESOR
                </button>  
                <div className="card espcard">
                    
                <table id="table_id" className="display">
                  <thead>
                      <tr>
                              <th scope="col">id</th>
                              <th scope="col">Nombre</th>
                              <th scope="col">Género</th>
                              <th scope="col">Red social</th>
                              <th scope="col">Teléfono</th>
                              <th scope="col">Acciones</th>
                      </tr>
                  </thead>
                  <tbody>
                          { 
                            profesores.length ?  
                            profesores.map(profesor=>
                            <tr key={profesor.id}>
                              <th scope="row">{profesor.id}</th>
                              <td>{profesor.nombre} {profesor.ap_paterno} {profesor.ap_materno}</td>
                              <td>{profesor.genero}</td>
                           
                              <td>{profesor.red_social}</td>
                              <td>{profesor.telefono}</td>
                              <td>
                                <button type="button" className="btn btn-info mr-2" data-toggle="modal" data-target="#profModal" onClick={() => this.seleccionarProfesor(profesor)}><i className="fas fa-edit"></i></button>
                                <button type="button" className="btn btn-danger mr-2" data-toggle="modal" data-target="#profDeleteModal" onClick={() => this.seleccionarProfesor(profesor)}><i className="fas fa-trash-alt"></i></button>
                              </td>
                            </tr>):
                            'No hay Profesores registrados.'
                          }
                        </tbody>
              </table>


                    {/* 
                      <table className="table">
                        <thead className="thead-dark">
                            <tr>
                              <th scope="col">id</th>
                              <th scope="col">Nombre</th>
                              <th scope="col">Género</th>
                              <th scope="col">Red social</th>
                              <th scope="col">Teléfono</th>
                              <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>  
                          { 
                            profesores.length ?  
                            profesores.map(profesor=>
                            <tr key={profesor.id}>
                              <th scope="row">{profesor.id}</th>
                              <td>{profesor.nombre} {profesor.ap_paterno} {profesor.ap_materno}</td>
                              <td>{profesor.genero}</td>
                           
                              <td>{profesor.red_social}</td>
                              <td>{profesor.telefono}</td>
                              <td>
                                <button type="button" className="btn btn-info mr-2" data-toggle="modal" data-target="#profModal" onClick={() => this.seleccionarProfesor(profesor)}><i className="fas fa-edit"></i></button>
                                <button type="button" className="btn btn-danger mr-2" data-toggle="modal" data-target="#profDeleteModal" onClick={() => this.seleccionarProfesor(profesor)}><i className="fas fa-trash-alt"></i></button>
                              </td>
                            </tr>):
                            'No hay Profesores registrados.'
                          }
                        </tbody>
                      </table> 
                    </div>*/}
                    { errorMsg ? <div>{errorMsg}</div>:null }
                    <ToastContainer/>
                  </div>  

            {/* Inicio modal de insersión y actualización de registros de Profesores */}
                  <div className="modal fade" id="profModal" data-backdrop="static" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div className="modal-dialog modal-dialog-centered modal-lg" role="document">
                      <div className="modal-content">
                        <div className="modal-header bg-info">
                        {this.state.tipoModal == 'insertar'?
                          <h5 className="modal-title" id="staticBackdropLabel"><strong>Nuevo Profesor</strong></h5>:
                          <h5 className="modal-title" id="staticBackdropLabel"><strong>Editar Información de Profesor</strong></h5>
                        }
                          <button type="button" className="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div className="modal-body">
                            <div className="form-row">
                                <div className="form-group col-md-6">
                                    <label>* Nombre</label>
                                    <input type="text" className="form-control" id="nombre" name="nombre" placeholder="Nombre(s)" onChange={this.handleChange} value={form?form.nombre:'' || ''}/>
                                </div>
                                <div className="form-group col-md-6">
                                    <label>* Apellido Paterno</label>
                                    <input type="text" className="form-control" id="ap_paterno" name="ap_paterno" placeholder="Apellido paterno" onChange={this.handleChange} value={form?form.ap_paterno:'' ||''}/>
                                </div>
                            </div>
                            <div className="form-row">
                                <div className="form-group col-md-6">
                                    <label>Apellido Materno</label>
                                    <input type="text" className="form-control" id="ap_materno" name="ap_materno" placeholder="Apellido materno" onChange={this.handleChange} value={form?form.ap_materno:'' ||''}/>
                                </div>
                                <div className="form-group col-md-6">
                                    <label>* Genero</label>
                                    <select name="genero_id" id="genero_id" className="form-control" onChange={this.handleChange} value={form?form.genero_id:'' || ''}>
                                        <option value="">Selecciona una opción...</option>
                                        <option value="1">Masculino</option>
                                        <option value="2">Femenino</option>
                                    </select>
                                </div>
                            </div>
                            <div className="form-row">
                               <div className="form-group col-md-6">
                                        <label>Teléfono</label>
                                        <input type="text" className="form-control" id="telefono" name="telefono" placeholder="teléfono" onChange={this.handleChange} value={form?form.telefono:'' || ''}/>
                                </div>
                                <div className="form-group col-md-6">
                                        <label>Red social</label>
                                        <input type="text" className="form-control" id="red_social" name="red_social" placeholder="Ej.facebook:usuario.345" onChange={this.handleChange} value={form?form.red_social:'' || ''}/>
                                </div>
                            </div>
                        </div>
                        <div className="modal-footer">
                          {this.state.tipoModal == 'insertar'?
                          <button type="button" className="btn btn-primary" onClick={() => this.insertProfesor()}>Guardar</button>:
                          <button type="button" className="btn btn-primary" onClick={() => this.updateProfesor()}>Actualizar</button>
                          }
                          <button type="button" className="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        </div>
                      </div>
                    </div>
                  </div>
            {/* Fin modal de insersión y actualización de registros de Profesores */}

                
            <div className="modal fade" id="profDeleteModal" data-backdrop="static" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div className="modal-dialog modal-dialog-centered" role="document">
                      <div className="modal-content">
                        <div className="modal-header bg-info">
                          
                          <button type="button" className="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div className="modal-body">
                        <p>¿Estas seguro de que deseas eliminar al Profesor <b>{form && form.nombre} {form && form.ap_paterno}</b>?</p>
                        </div>
                        <div className="modal-footer">
                          
                          <button type="button" className="btn btn-danger" onClick={() => this.deleteProfesor()}>Eliminar</button>
                          <button type="button" className="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        </div>
                      </div>
                    </div>
              </div>



        </div>
        );
    }
}

export default Profesores;

if (document.getElementById('profesores')) {
    ReactDOM.render(<Profesores />, document.getElementById('profesores'));
}