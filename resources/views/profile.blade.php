@section('profile')
<div class="container mx-auto">
  <div class="grid gap-4 m-4">
    <div class="bg-white p-4 rounded-lg shadow-lg">
      <h2 class="text-4xl font-semibold text-blue-900 text-center" id="biografia">Biografía</h2>
      <figure class="pt-2 pb-4">
          <img src="{{ asset('images/perfil-dagoberto.jpg') }}" alt="Dagoberto Gutiérrez" class="w-1/3 h-auto mx-auto m-4 rounded-lg">
          <figcaption class="text-center">
            <a href="https://pbs.twimg.com/media/GStYZFoXAAAYfAI?format=jpg&name=large" rel="noopener noreferrer" target="_blank">Fuente de imagen original</a>
          </figcaption>
      </figure>
      <p class="text-gray-600 p-2">
        Dagoberto Gutiérrez nació el 12 de diciembre de 1944 en Chalchuapa, Santa Ana. Eran tiempo de conmoción social contra el presidente militar Maximiliano Hernández Martínez. Estudio primaria en la Escuela Francisco I. Cordero y la secundaria en el Instituto Nacional de Santa Ana (INSA). Viajo a San Salvador para estudiar Derecho en la Universidad de El Salvador (UES) en 1962 y la culminó en 1967.
      </p>
      <p class="text-gray-600 p-2">
        Estando en la UES se incorporó a la Asociación General de Estudiantes Universitarios Salvadoreños (AGEUS) y al Partido Comunista Salvadoreño (PCS). Fue uno de los líderes de la lucha por recuperar la autonomía universitaria, perdida por una ocupación militar en 1972 por el gobierno del coronel Arturo Armando Molina.
      </p>
      <p class="text-gray-600 p-2">
        Con las adhesiones de las fuerzas políticas y sociales contra las opresiones de los gobiernos militares, Dagoberto Gutiérrez fue uno de los fundadores del Frente Farabundo Martí para la Liberación Nacional (FMLN) donde fue comandante de insurgencia y miembro de la Comandancia General, bajo el pseudónimo de “Logan", fue uno de los firmantes de los Acuerdos de Paz de Chapultepec en 1992.
      </p>
      <p class="text-gray-600 p-2">
        Fue diputado de la Asamblea Legislativa de El Salvador por el FMLN en el periodo 1994-1997. Debido a tener posiciones ideológicas radicales, fue expulsado del FMLN por diferencias con la dirigencia. Posteriormente fue vicerrector de la Universidad Luterana Salvadoreña (ULS) y director de la revista de pensamiento crítico “Estudios Centroamericanos”.
      </p>
      <p class="text-gray-600">
        Como analista político, Dagoberto Gutiérrez fue un crítico de los gobiernos de ARENA y del FMLN, por considerar que no habían cumplido con las expectativas de la población salvadoreña. Explicaba fenómenos sociológicos complejos de manera simple y accesible para la población. Participaba recurrentemente en programas de televisión y radio, y escribía columnas de opinión en periódicos nacionales.
      </p>
    </div>
  </div>
  
@endsection

@section('cargos')
  <div class="bg-white p-4 rounded-lg shadow-lg m-4">
    <h2 class="text-4xl font-semibold text-blue-900 text-center" id="cargos">Cargos</h2>
    <ul class="list-disc list-inside text-gray-600 p-2">
      <li>Comandante de Insurgencia del FMLN</li>
      <li>Comandante de la Comandancia General del FMLN</li>
      <li>Diputado de la Asamblea Legislativa de El Salvador</li>
      <li>Vicerrector de la Universidad Luterana Salvadoreña</li>
      <li>Director de la revista de pensamiento crítico “Estudios Centroamericanos”</li>
    </ul>
  </div>
@endsection

@section('libros')
  <div class="bg-white p-4 rounded-lg shadow-lg m-4">
    <h2 class="text-4xl font-semibold text-blue-900 text-center" id="libros">Libros</h2>
    <ul class="list-disc list-inside text-gray-600 p-2">
      <li>Nadie quedará en el olvido: cuentos de la vida real (2004)</li>
      <li>La persona, la fe y la revolución (2011)</li>
      <li>El Salvador: crisis histórica (2015)</li>
      <li>El estado, la democracia y el mercado (2023)</li>
      <li>Revista Realidad: El trabajo universitario ha de recuperar el sentido crítico, ha de recuperar la humanidad para los seres humanos (2012)</li>
    </ul>
  </div>
@endsection