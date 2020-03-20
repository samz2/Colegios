<template>
    <div class="content">
	    <div class="container-fluid"  id="cabecera" >
            <table border="1" class="text-center" style="font-size: 12px" cellpadding="0" cellspacing="0" >
                <tr>
                    <td colspan="2" rowspan="4"><img src="img/logoPRE.png" height="150" width="200" alt=""></td>
                    <td colspan="10" class="amarillo">{{datos.grado}} ° {{datos.seccion}} - {{datos.nivel}}</td>
                    <td  colspan="9" class="celeste">{{datos.bimestre}}° BIMESTRE</td>
                </tr>
                <tr>
                    <td colspan="19">&nbsp;</td>
                </tr>
                <tr>
                    <td colspan="19" class="verdeopaco">RESULTADOS GENERALES DEL SIMULACRO N° {{datos.simulacro}}</td>
                </tr>
                <tr>
                    <td colspan="19">&nbsp;</td>
                </tr>
                <tr>
                    <td colspan="2">&nbsp;</td>
                    <td rowspan="4" class="verticalText"><p class="verticalText">RAZONAMIENTO VERBAL</p></td>
                    <td rowspan="4" class="verticalText"><p class="verticalText">RAZONAMIENTO MATEMÁTICO</p></td>
                    <td rowspan="4" class="verticalText"><p class="verticalText">ARITMÉTICA</p></td>
                    <td rowspan="4" class="verticalText"><p class="verticalText">ÁLGEBRA</p></td>
                    <td rowspan="4" class="verticalText"><p class="verticalText">GEOMETRÍA</p></td>
                    <td rowspan="4" class="verticalText"><p class="verticalText">TRIGONOMETRÍA</p></td>
                    <td rowspan="4" class="verticalText"><p class="verticalText">LENGUAJE</p></td>
                    <td rowspan="4" class="verticalText"><p class="verticalText">LITERATURA</p></td>
                    <td rowspan="4" class="verticalText"><p class="verticalText">PLAN LECTOR</p></td>
                    <td rowspan="4" class="verticalText"><p class="verticalText">BIOLOGÍA</p></td>
                    <td rowspan="4" class="verticalText"><p class="verticalText">QUÍMICA</p></td>
                    <td rowspan="4" class="verticalText"><p class="verticalText">FÍSICA</p></td>
                    <td rowspan="4" class="verticalText"><p class="verticalText">HISTORIA DEL PERÚ</p></td>
                    <td rowspan="4" class="verticalText"><p class="verticalText">GEOGRAFÍA</p></td>
                    <td rowspan="4" class="verticalText"><p class="verticalText">CÍVICA</p></td>
                    <td rowspan="4" class="verticalText"><p class="verticalText">INGLÉS</p></td>
                    <td rowspan="4" class="verticalText"><p class="verticalText">PUNTAJE</p></td>
                    <td rowspan="4" class="verticalText"><p class="verticalText">CALIFICACIÓN</p></td>
                    <td rowspan="4" class="verticalText"><p class="verticalText">ORDEN DE MÉRITO</p></td>
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
                    <td><input type="text" size="3" @blur="validar(index)" v-model="a.algebra"      onkeypress='return solonumeros(event)' maxlength="2"></td>
                    <td><input type="text" size="3" @blur="validar(index)" v-model="a.geometria"    onkeypress='return solonumeros(event)' maxlength="2"></td>
                    <td><input type="text" size="3" @blur="validar(index)" v-model="a.trigonometria" onkeypress='return solonumeros(event)' maxlength="2"></td>
                    <td><input type="text" size="3" @blur="validar(index)" v-model="a.lenguaje"     onkeypress='return solonumeros(event)' maxlength="2"></td>
                    <td><input type="text" size="3" @blur="validar(index)" v-model="a.literatura"   onkeypress='return solonumeros(event)' maxlength="2"></td>
                    <td><input type="text" size="3" @blur="validar(index)" v-model="a.planlector"   onkeypress='return solonumeros(event)' maxlength="2"></td>
                    <td><input type="text" size="3" @blur="validar(index)" v-model="a.biologia"     onkeypress='return solonumeros(event)' maxlength="2"></td>
                    <td><input type="text" size="3" @blur="validar(index)" v-model="a.quimica"      onkeypress='return solonumeros(event)' maxlength="2"></td>
                    <td><input type="text" size="3" @blur="validar(index)" v-model="a.fisica"       onkeypress='return solonumeros(event)' maxlength="2"></td>
                    <td><input type="text" size="3" @blur="validar(index)" v-model="a.historia"     onkeypress='return solonumeros(event)' maxlength="2"></td>
                    <td><input type="text" size="3" @blur="validar(index)" v-model="a.geografia"    onkeypress='return solonumeros(event)' maxlength="2"></td>
                    <td><input type="text" size="3" @blur="validar(index)" v-model="a.civica"       onkeypress='return solonumeros(event)' maxlength="2"></td>
                    <td><input type="text" size="3" @blur="sumar(index)" v-model="a.ingles"         onkeypress='return solonumeros(event)' maxlength="2"></td>
                    <td><input type="text" size="3" readonly v-model="a.acumulado"></td>
                    <td><input type="text" size="3" readonly v-model="a.promedio"></td>
                    <td><input type="text" size="3" readonly v-model="a.ordenmerito"></td>
                
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
            grados:[],
            cursos:[],
            orden:[],
            simulacros:[],
            niveles:[],
            secciones:[],
            p1:2,
            p2:4,
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
                if(nota <0 || nota >10)
                {
                    swal({
                            type: 'error',
                            title: 'número ingresado es incorrecto!',
                            showConfirmButton: false,
                            timer: 2000
                        });
                bool = false;
                }
            }
            return bool;
        },
        valnum1(nota){
            var bool = true;
            if(nota != null && nota != "")
            {
                if(nota <0 || nota >5)
                {
                    swal({
                            type: 'error',
                            title: 'número ingresado es incorrecto!',
                            showConfirmButton: false,
                            timer: 2000
                        });
                bool = false;
                }
            }
            return bool;
        },
        nonull(input){
            if(input==null){
                return 0;
            }else{
                return parseInt(input);
            }
        },
        sumar(index){
            if(!this.valnum1(this.notas[index].ingles)){
                this.notas[index].ingles = null;
                return;
            }
            this.notas[index].acumulado =   this.nonull(this.notas[index].rv) * this.p1+
                                            this.nonull(this.notas[index].rm) * this.p1+
                                            this.nonull(this.notas[index].aritmetica) * this.p2+
                                            this.nonull(this.notas[index].algebra) * this.p2+
                                            this.nonull(this.notas[index].geometria) * this.p2+
                                            this.nonull(this.notas[index].lenguaje) * this.p2+
                                            this.nonull(this.notas[index].literatura) * this.p2+
                                            this.nonull(this.notas[index].planlector) * this.p2+
                                            this.nonull(this.notas[index].biologia) * this.p2+
                                            this.nonull(this.notas[index].quimica) * this.p2+
                                            this.nonull(this.notas[index].historia) * this.p2+
                                            this.nonull(this.notas[index].geografia) * this.p2+
                                            this.nonull(this.notas[index].ingles) * this.p2+   
                                            this.nonull(this.notas[index].civica) * this.p2+
                                            this.nonull(this.notas[index].trigonometria) * this.p2+
                                            this.nonull(this.notas[index].fisica) * this.p2; 

            this.notas[index].promediodec = Math.round((this.notas[index].acumulado/16)*100)/100;  
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
            if(!this.valnum1(this.notas[index].aritmetica)){
                this.notas[index].aritmetica    = null;
            }
            if(!this.valnum1(this.notas[index].algebra)){
                this.notas[index].algebra    = null;
            }
            if(!this.valnum1(this.notas[index].geometria)){
                this.notas[index].geometria    = null;
            }
            if(!this.valnum1(this.notas[index].trigonometria)){
                this.notas[index].trigonometria    = null;
            }
            if(!this.valnum1(this.notas[index].lenguaje)){
                this.notas[index].lenguaje = null;
            }
            if(!this.valnum1(this.notas[index].literatura)){
                this.notas[index].literatura    = null;
            }
            if(!this.valnum1(this.notas[index].planlector)){
                this.notas[index].planlector    = null;
            }
            if(!this.valnum1(this.notas[index].biologia)){
                this.notas[index].biologia    = null;
            }
            if(!this.valnum1(this.notas[index].quimica)){
                this.notas[index].quimica    = null;
            }
            if(!this.valnum1(this.notas[index].fisica)){
                this.notas[index].fisica    = null;
            }
            if(!this.valnum1(this.notas[index].historia)){
                this.notas[index].historia    = null;
            }
            if(!this.valnum1(this.notas[index].geografia)){
                this.notas[index].ciencia = null;
            }
            if(!this.valnum1(this.notas[index].civica)){
                this.notas[index].personal = null;
            }
            
        },  
        
        
    }
}
</script>
