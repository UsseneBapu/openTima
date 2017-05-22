@extends('layouts.departamento')
@section('side_nav')
  @include('partials.admin._verticalnav')
@stop
@section('content')
<div class="ui cards">
 <div class="ui link card">
     <div class="content">
       <div class="header"><a href="#"><i class="folder icon"></i>Temas</a></div>
       <div class="description">
         Base de dados de temas
       </div>
     </div>
 </div>
 <div class="ui link card">
   <div class="content">
     <div class="header"><a href="#"><i class="file icon"></i>Actas</a></div>
     <div class="description">
       Actas dos encontros de supervisao
     </div>
   </div>
 </div>
 <div class="ui link card">
   <div class="content">
     <div class="header"><a href="#"><i class="history icon"></i>Progresso</a></div>
     <div class="description">
       progresso dos trabalhos
     </div>
   </div>
 </div>
 <div class="ui link card">
     <div class="content">
       <div class="header"><a href="#"><i class="database icon"></i>Trabalhos concluidos</a></div>
       <div class="description">
         Repositorio de monografias
       </div>
     </div>
 </div>
 <div class="ui link card">
   <div class="content">
     <div class="header"><a href="{{url('/feuem/'.$departamento->sigla.'/estudantes')}}"><i class="student icon"></i>Estudantes</a></div>
     <div class="description">
       Base de dados de estudantes
     </div>
   </div>
 </div>
 <div class="ui link card">
   <div class="content">
     <div class="header"><a href="#"><i class="unhide icon"></i>Docentes</a></div>
     <div class="description">
       Base de dados de docentes
     </div>
   </div>
 </div>
 <div class="ui link card">
   <div class="content">
     <div class="header"><a href="#"><i class="announcement icon"></i>Marcacao de defesas</a></div>
     <div class="description">
       Publicacao de defesas.
     </div>
   </div>
 </div>

 <div class="ui link card">
   <div class="content">
     <div class="header"><a href="#"><i class="users icon"></i>Alocacao de supervisores</a></div>
     <div class="description">
       Designacao de docente para orientar estudante
     </div>
   </div>
 </div>
 <div class="ui link card">
   <div class="content">
     <div class="header"><a href="#"><i class="users icon"></i>Areas Cientificas</a></div>
     <div class="description">
       Designacao de docente para orientar estudante
     </div>
   </div>
 </div>
</div>
 </div>

 <div id="maincontent" class="ui main container">
   <!--<h1 class="ui header">Hjem</h1>-->
   <div class="ui stackable grid">
     <div class="nine wide column">
       <div id="regInnkommende" class="ui stacked segment">
         <a class="ui olive ribbon label">Registrer innkommende</a>

         <div class="ui form">

           <div class="two fields">
             <div class="field">
               <label>Mengde</label>

               <div class="ui right labeled input">
                 <input type="text" placeholder="Skriv mengde">
                 <div class="ui basic label">
                   Tonn
                 </div>
               </div>
             </div>
             <div class="field">

               <label>Kunde</label>

               <div class="ui fluid search selection dropdown">
                 <input type="hidden" name="country">
                 <i class="dropdown icon"></i>
                 <div class="default text">Velg kunde</div>
                 <div class="menu">
                   <div class="item" data-value="af">
                     </i>Afghanistan</div>
                   <div class="item" data-value="ax">
                     </i>Aland Islands</div>
                 </div>
               </div>
             </div>
           </div>

           <div class="field">

             <div class="ui checkbox datepicker">
               <input type="checkbox" tabindex="0" class="hidden" checked>
               <label>Bruk nåværende dato og klokkeslett</label>
             </div>
           </div>
       <div class="ui secondary segment datepicker dont-show small form">
             <div class="field">
               <label>Dato</label>

               <div class="fields">
                 <div class="three wide field">
                   <select class="ui fluid dropdown" name="inn_dato[dato]">
                     <option value="01">1</option>
                     <option value="02">2</option>
                     <option value="03">3</option>
                     <option value="04">4</option>
                     <option value="05">5</option>
                     <option value="06">6</option>
                     <option value="07">7</option>
                     <option value="08">8</option>
                     <option value="09">9</option>
                     <option value="10">10</option>
                     <option value="11">11</option>
                     <option value="12">12</option>
                     <option value="13">13</option>
                     <option value="14">14</option>
                     <option value="15">15</option>
                     <option value="16">16</option>
                     <option value="17">17</option>
                     <option value="18">18</option>
                     <option value="19">19</option>
                     <option value="20">20</option>
                     <option value="21">21</option>
                     <option value="22">22</option>
                     <option value="23">23</option>
                     <option value="24">24</option>
                     <option value="25">25</option>
                     <option value="26">26</option>
                     <option value="27">27</option>
                     <option value="28">28</option>
                     <option value="29">29</option>
                     <option value="30">30</option>
                     <option value="31">31</option>
                   </select>
                 </div>
                 <div class="six wide field">

                   <select class="ui fluid search dropdown" name="inn_dato[maaned]">
                     <option value="">Måned</option>
                     <option value="1">Januar</option>
                     <option value="2">Februar</option>
                     <option value="3">Mars</option>
                     <option value="4">April</option>
                     <option value="5">Mai</option>
                     <option value="6">Juni</option>
                     <option value="7">Juli</option>
                     <option value="8">August</option>
                     <option value="9">September</option>
                     <option value="10">Oktober</option>
                     <option value="11">November</option>
                     <option value="12">Desember</option>
                   </select>
                 </div>
                 <div class="four wide field">
                   <div class="ui input">
                     <input type="text" value="2016" placeholder="År">
                   </div>
                 </div>
               </div>
             </div>

             <div class="fields">
               <div class="six wide field">
                 <label>Tidspunkt</label>

                 <div class="two fields">
                   <div class="field">


                     <div class="ui input">
                       <input type="text" value="12">
                     </div>
                   </div>
                   <div class="field">
                     <div class="ui input">
                       <input type="text" value="00">
                     </div>
                   </div>

                 </div>
               </div>
             </div>
           </div>

           <div class="ui button" tabindex="0">OK</div>
         </div>

       </div>
       <div class="ui hidden divider"></div>
       <div id="regUtgaende" class="ui stacked segment">
         <a class="ui ribbon orange label">Registrer utgående</a>
         <div class="ui form">

           <div class="two fields">
             <div class="field">
               <label>Mengde</label>

               <div class="ui right labeled input">
                 <input type="text" placeholder="Skriv mengde">
                 <div class="ui basic label">
                   Tonn
                 </div>
               </div>
             </div>
             <div class="field">

               <label>Type</label>

               <div class="ui fluid search selection dropdown">
                 <input type="hidden" name="country">
                 <i class="dropdown icon"></i>
                 <div class="default text">Velg type</div>
                 <div class="menu">
                   <div class="item" data-value="af">
                     </i>Afghanistan</div>
                   <div class="item" data-value="ax">
                     </i>Aland Islands</div>
                 </div>
               </div>
             </div>
           </div>

           <div class="field">

             <div class="ui checkbox">
               <input type="checkbox" tabindex="0" class="hidden" checked>
               <label>Bruk nåværende dato og klokkeslett</label>
             </div>
           </div>
           <div class="ui secondary segment datepicker dont-show small form">
             <div class="field">
               <label>Dato</label>

               <div class="fields">
                 <div class="three wide field">
                   <select class="ui fluid dropdown" name="ut_dato[dato]">
                     <option value="01">1</option>
                     <option value="02">2</option>
                     <option value="03">3</option>
                     <option value="04">4</option>
                     <option value="05">5</option>
                     <option value="06">6</option>
                     <option value="07">7</option>
                     <option value="08">8</option>
                     <option value="09">9</option>
                     <option value="10">10</option>
                     <option value="11">11</option>
                     <option value="12">12</option>
                     <option value="13">13</option>
                     <option value="14">14</option>
                     <option value="15">15</option>
                     <option value="16">16</option>
                     <option value="17">17</option>
                     <option value="18">18</option>
                     <option value="19">19</option>
                     <option value="20">20</option>
                     <option value="21">21</option>
                     <option value="22">22</option>
                     <option value="23">23</option>
                     <option value="24">24</option>
                     <option value="25">25</option>
                     <option value="26">26</option>
                     <option value="27">27</option>
                     <option value="28">28</option>
                     <option value="29">29</option>
                     <option value="30">30</option>
                     <option value="31">31</option>
                   </select>
                 </div>
                 <div class="six wide field">

                   <select class="ui fluid search dropdown" name="ut_dato[maaned]">
                     <option value="">Måned</option>
                     <option value="1">Januar</option>
                     <option value="2">Februar</option>
                     <option value="3">Mars</option>
                     <option value="4">April</option>
                     <option value="5">Mai</option>
                     <option value="6">Juni</option>
                     <option value="7">Juli</option>
                     <option value="8">August</option>
                     <option value="9">September</option>
                     <option value="10">Oktober</option>
                     <option value="11">November</option>
                     <option value="12">Desember</option>
                   </select>
                 </div>
                 <div class="four wide field">
                   <div class="ui input">
                     <input type="text" value="2016" placeholder="År">
                   </div>
                 </div>
               </div>
             </div>

             <div class="fields">
               <div class="six wide field">
                 <label>Tidspunkt</label>

                 <div class="two fields">
                   <div class="field">


                     <div class="ui input">
                       <input type="text" value="12">
                     </div>
                   </div>
                   <div class="field">
                     <div class="ui input">
                       <input type="text" value="00">
                     </div>
                   </div>

                 </div>
               </div>
             </div>
           </div>
           <div class="ui button" tabindex="0">OK</div>
         </div>
       </div>

     </div>
     <div class="seven wide column">
       <div class="ui secondary segment">
         <div class="ui grey small horizontal statistic">
           <div class="value">
             30,000
           </div>
           <div class="label">
             Tonn
           </div>
         </div>
       </div>
       <table class="ui small very compact unstackable selectable olive table">
         <thead>
           <tr>
             <th colspan="2">
               Siste innkommende
             </th>
           </tr>
         </thead>

         <tbody>
           <tr>
             <td>Firma 1</td>
             <td class="right aligned">20,15</td>
           </tr>
           <tr>
             <td>Selskap 2</td>
             <td class="right aligned">4,30</td>
           </tr>
           <tr>
             <td>Firma 1</td>
             <td class="right aligned">20,15</td>
           </tr>
           <tr>
             <td>Selskap 2</td>
             <td class="right aligned">4,30</td>
           </tr>
           <tr>
             <td>Organisasjon test</td>
             <td class="right aligned">1,00</td>
           </tr>
         </tbody>
       </table>

       <table class="ui small very compact unstackable selectable orange table">
         <thead>
           <tr>
             <th colspan="2">
               Siste utgående
             </th>
           </tr>
         </thead>

         <tbody>
           <tr>
             <td>Aluminium</td>
             <td class="right aligned">11,42</td>
           </tr>
           <tr>
             <td>Jern</td>
             <td class="right aligned">6,36</td>
           </tr>
           <tr>
             <td>Gummi</td>
             <td class="right aligned">5,60</td>
           </tr>
           <tr>
             <td>Gummi</td>
             <td class="right aligned">8,20</td>
           </tr>
           <tr>
             <td>Jern</td>
             <td class="right aligned">5,70</td>
           </tr>
         </tbody>
       </table>

     </div>
   </div>
 </div>
@endsection
<script type="text/javascript">
function dimmer() {
  $('.special.cards .image').dimmer({
  on: 'hover'
  });
}
</script>
