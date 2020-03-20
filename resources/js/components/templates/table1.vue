<template>
    <div class="content">
	    <div class="container-fluid"  id="cabecera" >
	    	
            <table border="1" class="text-center" cellpadding="0" cellspacing="0" >
                <tr>
                    <td colspan="2" rowspan="3"><img src="img/logoPRE.png" height="150" width="200" alt=""></td>
                    <td colspan="7" class="amarillo">{{datos.grado}}° {{datos.seccion}} - {{datos.nivel}}</td>
                    <td  colspan="4" class="celeste">{{datos.bimestre}}° BIMESTRE</td>
                </tr>
                <tr>
                    <td colspan="11">&nbsp;</td>
                </tr>
                <tr>
                    <td colspan="11" class="verdeopaco">RESULTADOS GENERALES DEL SIMULACRO N° {{datos.simulacro}}</td>
                </tr>
                <tr>
                    <td colspan="2">&nbsp;</td>
                    <td rowspan="4" class="verticalText"><p class="verticalText">RAZONAMIENTO VERBAL</p></td>
                    <td rowspan="4" class="verticalText "><p class="verticalText">RAZONAMIENTO MATEMÁTICO</p></td>
                    <td rowspan="4" class="verticalText "><p class="verticalText">MATEMÁTICAS</p></td>
                    <td rowspan="4" class="verticalText "><p class="verticalText">COMUNICACIÓN</p></td>
                    <td rowspan="4" class="verticalText "><p class="verticalText">CIENCIA Y AMBIENTE</p></td>
                    <td rowspan="4" class="verticalText "><p class="verticalText">PERSONAL SOCIAL</p></td>
                    <td rowspan="4" class="verticalText "><p class="verticalText">INGLÉS</p></td>
                    <td rowspan="4" class="verticalText "><p class="verticalText">PUNTAJE</p></td>
                    <td rowspan="4" class="verticalText "><p class="verticalText">CALIFICACIÓN</p></td>
                    <td rowspan="4" class="verticalText "><p class="verticalText">PROMEDIO</p></td>
                    <td rowspan="4" class="verticalText "><p class="verticalText">ORDEN DE MÉRITO</p></td>
                </tr>
                <tr>
                    <td colspan="2" class="verde">SIMULACRO N° {{datos.simulacro}}</td>
                </tr>
                <tr>
                    <td colspan="2">&nbsp;</td>
                </tr>
                <tr>
                    <td>N°</td>
                    <td class="text-left">APELLIDOS Y NOMBRES</td>
                </tr>
                <tr v-for="(a,index) in notas" :key="a.dni">
                    <td>{{a.index}}</td>
                    <td class="text-left">{{a.alumno}}</td>
                    <td><input type="text" size="3" @blur="validar(index)" v-model="a.rv"           onkeypress='return solonumeros(event)' maxlength="2"></td>
                    <td><input type="text" size="3" @blur="validar(index)" v-model="a.rm"           onkeypress='return solonumeros(event)' maxlength="2"></td>
                    <td><input type="text" size="3" @blur="validar(index)" v-model="a.aritmetica"   onkeypress='return solonumeros(event)' maxlength="2"></td>
                    <td><input type="text" size="3" @blur="validar(index)" v-model="a.lenguaje"     onkeypress='return solonumeros(event)' maxlength="2"></td>
                    <td><input type="text" size="3" @blur="validar(index)" v-model="a.biologia"     onkeypress='return solonumeros(event)' maxlength="2"></td>
                    <td><input type="text" size="3" @blur="validar(index)" v-model="a.civica"       onkeypress='return solonumeros(event)' maxlength="2"></td>
                    <td><input type="text" size="3" @blur="sumar(index)" v-model="a.ingles"         onkeypress='return solonumeros(event)' maxlength="2"></td>
                    <td><input type="text" size="3" readonly v-model="a.acumulado"></td>
                    <td><input type="text" size="3" readonly v-model="a.promediodec"></td>
                    <td><input type="text" size="3" readonly v-model="a.promedio"></td>
                    <td><input type="text" size="3" readonly  v-model="a.ordenmerito"></td>
                </tr>
            </table>
                   
	    </div>
    </div>	
</template>

<script>
import { isNullOrUndefined } from 'util';
    export default {
        props : ["notas","datos"],
    data() {
        return {
        //    simulacro:{
        //         bimestre:null,
        //         simulacro:null,
        //         nivel:null,
        //         grado:null,
        //         seccion:null
        //     },
            // notas:[{
            //     index:null,
            //     dni:null,
            //     alumno:null,
            //     rm:null,
            //     rv:null,
            //     aritmetica:null,
            //     algebra       :  null,
            //     geometria     :  null,
            //     trigonometria :  null,
            //     lenguaje      :  null,
            //     literatura    :  null,
            //     planlector    :  null,
            //     biologia      :  null,
            //     quimica       :  null,
            //     fisica        :  null,
            //     historia      :  null,
            //     historiauniversal   :  null,
            //     geografia     :  null,
            //     civica        :  null,
            //     ingles        :  null,
            //     acumulado     : null,
            //     promediodec   :  null,
            //     promedio      : null,  
            //     ordenmerito   :  null,
            // }],
            grados:[],
            cursos:[],
            orden:[],
            simulacros:[],
            niveles:[],
            secciones:[],
            acumulado:0,
        }
        
	},
	created(){
       
	},
	mounted(){
       
	},
    methods: {
        // props : ["val"],
      valnum(nota){
            var bool = true;
            if(nota != null && nota != "")
            {
                if(nota <0 || nota >20)
                {
                    swal({
                            type: 'error',
                            title: 'número ingresado es incorrecto, verifique los datos!',
                            showConfirmButton: false,
                            timer: 2000
                        });
                bool = false;
                }
            }
            return bool;
        },
        nonull(input){
            if(input == null){
                return 0;
            }else{
                return parseInt(input);
            }
        },
        sumar(index){
            if(this.notas[index].ingles == null || this.notas[index].ingles == '')
            {
                swal({
                        type: 'error',
                        title: 'ERROR!',
                        text:"Este campo no puede ser vacío.",
                        showConfirmButton: false,
                        timer: 2000
                    });
                return;
            }
            if(!this.valnum(this.notas[index].ingles)){
                this.notas[index].ingles = null;
                return;
            }
            this.notas[index].acumulado =   this.nonull(this.notas[index].rv)+
                                            this.nonull(this.notas[index].rm)+
                                            this.nonull(this.notas[index].aritmetica)+
                                            this.nonull(this.notas[index].lenguaje)+
                                            this.nonull(this.notas[index].biologia)+
                                            this.nonull(this.notas[index].civica)+
                                            this.nonull(this.notas[index].ingles);   
            this.notas[index].promediodec = Math.round((this.notas[index].acumulado/7)*100)/100;  
            this.notas[index].promedio = Math.round(this.notas[index].promediodec);   
            console.log(this.notas[index].promedio);
        },
        validar(index)
        {
            if(!this.valnum(this.notas[index].rv)){
                this.notas[index].rv = null;
            }
            if(!this.valnum(this.notas[index].rm)){
                this.notas[index].rm = null;
            }
            if(!this.valnum(this.notas[index].aritmetica)){
                this.notas[index].aritmetica    = null;
            }
            if(!this.valnum(this.notas[index].lenguaje)){
                this.notas[index].lenguaje = null;
            }
            if(!this.valnum(this.notas[index].biologia)){
                this.notas[index].biologia = null;
            }
            if(!this.valnum(this.notas[index].personal)){
                this.notas[index].personal = null;
            }
            if(!this.valnum(this.notas[index].civica)){
                this.notas[index].civica = null;
            }
        },  
        
        
    }
}
</script>
