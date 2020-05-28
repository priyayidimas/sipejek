@extends('t_index')
@section('title')
    Demo
@endsection
@section('head')
    <style>
        .colors-section p {
            font-size: 0.8rem;
        }
        .dynamic-color .col-md-4 {
            margin-bottom: 2rem; 
        }
        .dynamic-color .col-md-4 div {
            padding: 7px 20px 7px 20px;
        }
        .shadow-box-example {
            height: 120px;
            width: 100%;
            background-color: #64b5f6;
        }
    </style>
@endsection
@section('content')
<div class="container mt-5">    
    <section id="animations-on-scroll">
        <h3 class="h1 mb-4">Animations</h3>
        <h5 class="h5 mb-4">Reveal Animations When Scrolling</h5>
        <p class="mb-5">Thanks to MDB you can easily launch an animation on page scroll.</p>
        <section>
          <div class="row">
            <div class="col-md-4 mb-4">
              <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(31).jpg" alt="A view on mountains."
                class="img-fluid wow bounceInUp z-depth-1">
            </div>
            <div class="col-md-4 mb-4">
              <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(32).jpg" alt="Cottage on a lake surrounded by mountains."
                class="img-fluid wow tada z-depth-1" data-wow-delay="0.2s">
            </div>
            <div class="col-md-4 mb-4">
              <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(73).jpg" alt="Cyclist riding down the mountain path."
                class="img-fluid wow fadeInLeft z-depth-1" data-wow-delay="0.3s">
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 mb-4 mb-md-0">
              <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg" alt="View on mountains from mountain top."
                class="img-fluid wow fadeInRight z-depth-1" data-wow-delay="0.4s">
            </div>
            <div class="col-md-4 mb-4 mb-md-0">
              <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(14).jpg" alt="Rocky shore in the morning."
                class="img-fluid wow fadeInUp z-depth-1" data-wow-delay="0.5s">
            </div>
            <div class="col-md-4 mb-4 mb-md-0">
              <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(35).jpg" alt="Rocky shore in the morning."
                class="img-fluid wow rollIn z-depth-1" data-wow-delay="0.6s">
            </div>
          </div>
        </section>
    </section>

    <hr class="my-5">

    <section id="colors">
      <h3 class="section-heading h1 mb-5">Colors</h3>
      <section>
        <div class="row dynamic-color colors-section">
          <div class="col-md-4">
            <div class="red lighten-5">
              <p class="mb-0 my-2">#ffebee red lighten-5</p>
            </div>
            <div class="red lighten-4">
              <p class="mb-0 my-2">#ffcdd2 red lighten-4</p>
            </div>
            <div class="red lighten-3">
              <p class="mb-0 my-2">#ef9a9a red lighten-3</p>
            </div>
            <div class="red lighten-2">
              <p class="mb-0 my-2">#e57373 red lighten-2</p>
            </div>
            <div class="red lighten-1">
              <p class="mb-0 my-2">#ef5350 red lighten-1</p>
            </div>
            <div class="red">
              <p class="mb-0 my-2">#f44336 red</p>
            </div>
            <div class="red darken-1 white-text">
              <p class="mb-0 my-2">#e53935 red darken-1</p>
            </div>
            <div class="red darken-2 white-text">
              <p class="mb-0 my-2">#d32f2f red darken-2</p>
            </div>
            <div class="red darken-3 white-text">
              <p class="mb-0 my-2">#c62828 red darken-3</p>
            </div>
            <div class="red darken-4 white-text">
              <p class="mb-0 my-2">#b71c1c red darken-4</p>
            </div>
            <div class="red accent-1 ">
              <p class="mb-0 my-2">#ff8a80 red accent-1</p>
            </div>
            <div class="red accent-2">
              <p class="mb-0 my-2">#ff5252 red accent-2</p>
            </div>
            <div class="red accent-3">
              <p class="mb-0 my-2">#ff1744 red accent-3</p>
            </div>
            <div class="red accent-4 white-text">
              <p class="mb-0 my-2">#d50000 red accent-4</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="pink lighten-5">
              <p class="mb-0 my-2">#fce4ec pink lighten-5</p>
            </div>
            <div class="pink lighten-4">
              <p class="mb-0 my-2">#f8bbd0 pink lighten-4</p>
            </div>
            <div class="pink lighten-3">
              <p class="mb-0 my-2">#f48fb1 pink lighten-3</p>
            </div>
            <div class="pink lighten-2">
              <p class="mb-0 my-2">#f06292 pink lighten-2</p>
            </div>
            <div class="pink lighten-1">
              <p class="mb-0 my-2">#ec407a pink lighten-1</p>
            </div>
            <div class="pink ">
              <p class="mb-0 my-2">#e91e63 pink</p>
            </div>
            <div class="pink darken-1 white-text">
              <p class="mb-0 my-2">#d81b60 pink darken-1</p>
            </div>
            <div class="pink darken-2 white-text">
              <p class="mb-0 my-2">#c2185b pink darken-2</p>
            </div>
            <div class="pink darken-3 white-text">
              <p class="mb-0 my-2">#ad1457 pink darken-3</p>
            </div>
            <div class="pink darken-4 white-text">
              <p class="mb-0 my-2">#880e4f pink darken-4</p>
            </div>
            <div class="pink accent-1">
              <p class="mb-0 my-2">#ff80ab pink accent-1</p>
            </div>
            <div class="pink accent-2">
              <p class="mb-0 my-2">#ff4081 pink accent-2</p>
            </div>
            <div class="pink accent-3">
              <p class="mb-0 my-2">#f50057 pink accent-3</p>
            </div>
            <div class="pink accent-4 white-text">
              <p class="mb-0 my-2">#c51162 pink accent-4</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="purple lighten-5">
              <p class="mb-0 my-2">#f3e5f5 purple lighten-5</p>
            </div>
            <div class="purple lighten-4">
              <p class="mb-0 my-2">#e1bee7 purple lighten-4</p>
            </div>
            <div class="purple lighten-3">
              <p class="mb-0 my-2">#ce93d8 purple lighten-3</p>
            </div>
            <div class="purple lighten-2">
              <p class="mb-0 my-2">#ba68c8 purple lighten-2</p>
            </div>
            <div class="purple lighten-1">
              <p class="mb-0 my-2">#ab47bc #purple lighten-1</p>
            </div>
            <div class="purple">
              <p class="mb-0 my-2">#9c27b0 purple</p>
            </div>
            <div class="purple darken-1 white-text">
              <p class="mb-0 my-2">#8e24aa purple darken-1</p>
            </div>
            <div class="purple darken-2 white-text">
              <p class="mb-0 my-2">#7b1fa2 purple darken-2</p>
            </div>
            <div class="purple darken-3 white-text">
              <p class="mb-0 my-2">#6a1b9a purple darken-3</p>
            </div>
            <div class="purple darken-4 white-text">
              <p class="mb-0 my-2">#4a148c purple darken-4</p>
            </div>
            <div class="purple accent-1">
              <p class="mb-0 my-2">#ea80fc purple accent-5</p>
            </div>
            <div class="purple accent-2">
              <p class="mb-0 my-2">#e040fb purple accent-5</p>
            </div>
            <div class="purple accent-3">
              <p class="mb-0 my-2">#d500f9 purple accent-5</p>
            </div>
            <div class="purple accent-4 white-text">
              <p class="mb-0 my-2">#aa00ff purple accent-4</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="deep-purple lighten-5">
              <p class="mb-0 my-2">#ede7f6 deep-purple lighten-5</p>
            </div>
            <div class="deep-purple lighten-4">
              <p class="mb-0 my-2">#d1c4e9 deep-purple lighten-4</p>
            </div>
            <div class="deep-purple lighten-3">
              <p class="mb-0 my-2">#b39ddb deep-purple lighten-3</p>
            </div>
            <div class="deep-purple lighten-2">
              <p class="mb-0 my-2">#9575cd deep-purple lighten-2</p>
            </div>
            <div class="deep-purple lighten-1">
              <p class="mb-0 my-2">#7e57c2 deep-purple lighten-1</p>
            </div>
            <div class="deep-purple">
              <p class="mb-0 my-2">#673ab7 deep-purple</p>
            </div>
            <div class="deep-purple darken-1 white-text">
              <p class="mb-0 my-2">#5e35b1 deep-purple darken-1</p>
            </div>
            <div class="deep-purple darken-2 white-text">
              <p class="mb-0 my-2">#512da8 deep-purple darken-2</p>
            </div>
            <div class="deep-purple darken-3 white-text">
              <p class="mb-0 my-2">#4527a0 deep-purple darken-3</p>
            </div>
            <div class="deep-purple darken-4 white-text">
              <p class="mb-0 my-2">#311b92 deep-purple darken-4</p>
            </div>
            <div class="deep-purple accent-1">
              <p class="mb-0 my-2">#b388ff deep-purple accent-1</p>
            </div>
            <div class="deep-purple accent-2">
              <p class="mb-0 my-2">#7c4dff deep-purple accent-2</p>
            </div>
            <div class="deep-purple accent-3">
              <p class="mb-0 my-2">#651fff deep-purple accent-3</p>
            </div>
            <div class="deep-purple accent-4 white-text">
              <p class="mb-0 my-2">#6200ea deep-purple accent-4</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="indigo lighten-5">
              <p class="mb-0 my-2">#e8eaf6 indigo lighten-5</p>
            </div>
            <div class="indigo lighten-4">
              <p class="mb-0 my-2">#c5cae9 indigo lighten-4</p>
            </div>
            <div class="indigo lighten-3">
              <p class="mb-0 my-2">#9fa8da indigo lighten-3</p>
            </div>
            <div class="indigo lighten-2">
              <p class="mb-0 my-2">#7986cb indigo lighten-2</p>
            </div>
            <div class="indigo lighten-1">
              <p class="mb-0 my-2">#5c6bc0 indigo lighten-1</p>
            </div>
            <div class="indigo">
              <p class="mb-0 my-2">#3f51b5 indigo</p>
            </div>
            <div class="indigo darken-1 white-text">
              <p class="mb-0 my-2">#3949ab indigo darken-1</p>
            </div>
            <div class="indigo darken-2 white-text">
              <p class="mb-0 my-2">#303f9f indigo darken-2</p>
            </div>
            <div class="indigo darken-3 white-text">
              <p class="mb-0 my-2">#283593 indigo darken-3</p>
            </div>
            <div class="indigo darken-4 white-text">
              <p class="mb-0 my-2">#1a237e indigo darken-4</p>
            </div>
            <div class="indigo accent-1">
              <p class="mb-0 my-2">#8c9eff indigo accent-1</p>
            </div>
            <div class="indigo accent-2">
              <p class="mb-0 my-2">#536dfe indigo accent-2</p>
            </div>
            <div class="indigo accent-3">
              <p class="mb-0 my-2">#3d5afe indigo accent-3</p>
            </div>
            <div class="indigo accent-4 white-text">
              <p class="mb-0 my-2">#304ffe indigo accent-4</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="blue lighten-5">
              <p class="mb-0 my-2">#e3f2fd blue lighten-5</p>
            </div>
            <div class="blue lighten-4">
              <p class="mb-0 my-2">#bbdefb blue lighten-4</p>
            </div>
            <div class="blue lighten-3">
              <p class="mb-0 my-2">#90caf9 blue lighten-3</p>
            </div>
            <div class="blue lighten-2">
              <p class="mb-0 my-2">#64b5f6 blue lighten-2</p>
            </div>
            <div class="blue lighten-1">
              <p class="mb-0 my-2">#42a5f5 blue lighten-1</p>
            </div>
            <div class="blue">
              <p class="mb-0 my-2">#2196f3 blue</p>
            </div>
            <div class="blue darken-1 white-text">
              <p class="mb-0 my-2">#1e88e5 blue darken-1</p>
            </div>
            <div class="blue darken-2 white-text">
              <p class="mb-0 my-2">#1976d2 blue darken-2</p>
            </div>
            <div class="blue darken-3 white-text">
              <p class="mb-0 my-2">#1565c0 blue darken-3</p>
            </div>
            <div class="blue darken-4 white-text">
              <p class="mb-0 my-2">#0d47a1 blue darken-4</p>
            </div>
            <div class="blue accent-1">
              <p class="mb-0 my-2">#82b1ff blue accent-1</p>
            </div>
            <div class="blue accent-2">
              <p class="mb-0 my-2">#448aff blue accent-2</p>
            </div>
            <div class="blue accent-3">
              <p class="mb-0 my-2">#2979ff blue accent-3</p>
            </div>
            <div class="blue accent-4 white-text">
              <p class="mb-0 my-2">#2962ff blue accent-4</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="light-blue lighten-5">
              <p class="mb-0 my-2">#e1f5fe light-blue lighten-5</p>
            </div>
            <div class="light-blue lighten-4">
              <p class="mb-0 my-2">#b3e5fc light-blue lighten-4</p>
            </div>
            <div class="light-blue lighten-3">
              <p class="mb-0 my-2">#81d4fa light-blue lighten-3</p>
            </div>
            <div class="light-blue lighten-2">
              <p class="mb-0 my-2">#4fc3f7 light-blue lighten-2</p>
            </div>
            <div class="light-blue lighten-1">
              <p class="mb-0 my-2">#29b6f6 light-blue lighten-1</p>
            </div>
            <div class="light-blue">
              <p class="mb-0 my-2">#03a9f4 light-blue</p>
            </div>
            <div class="light-blue darken-1 white-text">
              <p class="mb-0 my-2">#039be5 light-blue darken-1</p>
            </div>
            <div class="light-blue darken-2 white-text">
              <p class="mb-0 my-2">#0288d1 light-blue darken-2</p>
            </div>
            <div class="light-blue darken-3 white-text">
              <p class="mb-0 my-2">#0277bd light-blue darken-3</p>
            </div>
            <div class="light-blue darken-4 white-text">
              <p class="mb-0 my-2">#01579b light-blue darken-4</p>
            </div>
            <div class="light-blue accent-1">
              <p class="mb-0 my-2">#l80d8ff ight-blue accent-1</p>
            </div>
            <div class="light-blue accent-2">
              <p class="mb-0 my-2">#40c4ff light-blue accent-2</p>
            </div>
            <div class="light-blue accent-3">
              <p class="mb-0 my-2">#00b0ff light-blue accent-3</p>
            </div>
            <div class="light-blue accent-4 white-text">
              <p class="mb-0 my-2">#0091ea light-blue accent-4</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="cyan lighten-5">
              <p class="mb-0 my-2">#e0f7fa cyan lighten-5</p>
            </div>
            <div class="cyan lighten-4">
              <p class="mb-0 my-2">#b2ebf2 cyan lighten-4</p>
            </div>
            <div class="cyan lighten-3">
              <p class="mb-0 my-2">#80deea cyan lighten-3</p>
            </div>
            <div class="cyan lighten-2">
              <p class="mb-0 my-2">#4dd0e1 cyan lighten-2</p>
            </div>
            <div class="cyan lighten-1">
              <p class="mb-0 my-2">#26c6da cyan lighten-1</p>
            </div>
            <div class="cyan">
              <p class="mb-0 my-2">#00bcd4 cyan</p>
            </div>
            <div class="cyan darken-1 white-text">
              <p class="mb-0 my-2">#00acc1 cyan darken-1</p>
            </div>
            <div class="cyan darken-2 white-text">
              <p class="mb-0 my-2">#0097a7 cyan darken-2</p>
            </div>
            <div class="cyan darken-3 white-text">
              <p class="mb-0 my-2">#00838f cyan darken-3</p>
            </div>
            <div class="cyan darken-4 white-text">
              <p class="mb-0 my-2">#006064 cyan darken-4</p>
            </div>
            <div class="cyan accent-1">
              <p class="mb-0 my-2">#84ffff cyan accent-1</p>
            </div>
            <div class="cyan accent-2">
              <p class="mb-0 my-2">#18ffff cyan accent-2</p>
            </div>
            <div class="cyan accent-3">
              <p class="mb-0 my-2">#00e5ff cyan accent-3</p>
            </div>
            <div class="cyan accent-4 white-text">
              <p class="mb-0 my-2">#00b8d4 cyan accent-4</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="teal lighten-5">
              <p class="mb-0 my-2">#e0f2f1 teal lighten-5</p>
            </div>
            <div class="teal lighten-4">
              <p class="mb-0 my-2">#b2dfdb teal lighten-4</p>
            </div>
            <div class="teal lighten-3">
              <p class="mb-0 my-2">#80cbc4 teal lighten-3</p>
            </div>
            <div class="teal lighten-2">
              <p class="mb-0 my-2">#4db6ac teal lighten-2</p>
            </div>
            <div class="teal lighten-1">
              <p class="mb-0 my-2">#26a69a teal lighten-1</p>
            </div>
            <div class="teal">
              <p class="mb-0 my-2">#009688 teal</p>
            </div>
            <div class="teal darken-1 white-text">
              <p class="mb-0 my-2">#00897b teal darken-1</p>
            </div>
            <div class="teal darken-2 white-text">
              <p class="mb-0 my-2">#00796b teal darken-2</p>
            </div>
            <div class="teal darken-3 white-text">
              <p class="mb-0 my-2">#00695c teal darken-3</p>
            </div>
            <div class="teal darken-4 white-text">
              <p class="mb-0 my-2">#004d40 teal darken-4</p>
            </div>
            <div class="teal accent-1">
              <p class="mb-0 my-2">#a7ffeb teal accent-1</p>
            </div>
            <div class="teal accent-2">
              <p class="mb-0 my-2">#64ffda teal accent-2</p>
            </div>
            <div class="teal accent-3">
              <p class="mb-0 my-2">#1de9b6 teal accent-3</p>
            </div>
            <div class="teal accent-4 white-text">
              <p class="mb-0 my-2">#00bfa5 teal accent-4</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="green lighten-5">
              <p class="mb-0 my-2">#e8f5e9 green lighten-5</p>
            </div>
            <div class="green lighten-4">
              <p class="mb-0 my-2">#c8e6c9 green lighten-4</p>
            </div>
            <div class="green lighten-3">
              <p class="mb-0 my-2">#a5d6a7 green lighten-3</p>
            </div>
            <div class="green lighten-2">
              <p class="mb-0 my-2">#81c784 green lighten-2</p>
            </div>
            <div class="green lighten-1">
              <p class="mb-0 my-2">#66bb6a green lighten-1</p>
            </div>
            <div class="green">
              <p class="mb-0 my-2">#4caf50 green</p>
            </div>
            <div class="green darken-1 white-text">
              <p class="mb-0 my-2">#43a047 green darken-1</p>
            </div>
            <div class="green darken-2 white-text">
              <p class="mb-0 my-2">#388e3c green darken-2</p>
            </div>
            <div class="green darken-3 white-text">
              <p class="mb-0 my-2">#2e7d32 green darken-3</p>
            </div>
            <div class="green darken-4 white-text">
              <p class="mb-0 my-2">#1b5e20 green darken-4</p>
            </div>
            <div class="green accent-1">
              <p class="mb-0 my-2">#b9f6ca green accent-1</p>
            </div>
            <div class="green accent-2">
              <p class="mb-0 my-2">#69f0ae green accent-2</p>
            </div>
            <div class="green accent-3">
              <p class="mb-0 my-2">#00e676 green accent-3</p>
            </div>
            <div class="green accent-4 white-text">
              <p class="mb-0 my-2">#00c853 green accent-4</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="light-green lighten-5">
              <p class="mb-0 my-2">#f1f8e9 light-green lighten-5</p>
            </div>
            <div class="light-green lighten-4">
              <p class="mb-0 my-2">#dcedc8 light-green lighten-4</p>
            </div>
            <div class="light-green lighten-3">
              <p class="mb-0 my-2">#c5e1a5 light-green lighten-3</p>
            </div>
            <div class="light-green lighten-2">
              <p class="mb-0 my-2">#aed581 light-green lighten-2</p>
            </div>
            <div class="light-green lighten-1">
              <p class="mb-0 my-2">#9ccc65 light-green lighten-1</p>
            </div>
            <div class="light-green">
              <p class="mb-0 my-2">#8bc34a light-green</p>
            </div>
            <div class="light-green darken-1 white-text">
              <p class="mb-0 my-2">#7cb342 light-green darken-1</p>
            </div>
            <div class="light-green darken-2 white-text">
              <p class="mb-0 my-2">#689f38 light-green darken-2</p>
            </div>
            <div class="light-green darken-3 white-text">
              <p class="mb-0 my-2">#558b2f light-green darken-3</p>
            </div>
            <div class="light-green darken-4 white-text">
              <p class="mb-0 my-2">#33691e light-green darken-4</p>
            </div>
            <div class="light-green accent-1">
              <p class="mb-0 my-2">#ccff90 light-green accent-1</p>
            </div>
            <div class="light-green accent-2">
              <p class="mb-0 my-2">#b2ff59 light-green accent-2</p>
            </div>
            <div class="light-green accent-3">
              <p class="mb-0 my-2">#76ff03 light-green accent-3</p>
            </div>
            <div class="light-green accent-4 white-text">
              <p class="mb-0 my-2">#64dd17 light-green accent-4</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="lime lighten-5">
              <p class="mb-0 my-2">#f9fbe7 lime lighten-5</p>
            </div>
            <div class="lime lighten-4">
              <p class="mb-0 my-2">#f0f4c3 lime lighten-4</p>
            </div>
            <div class="lime lighten-3">
              <p class="mb-0 my-2">#e6ee9c lime lighten-3</p>
            </div>
            <div class="lime lighten-2">
              <p class="mb-0 my-2">#dce775 lime lighten-2</p>
            </div>
            <div class="lime lighten-1">
              <p class="mb-0 my-2">#d4e157 lime lighten-1</p>
            </div>
            <div class="lime">
              <p class="mb-0 my-2">#cddc39 lime</p>
            </div>
            <div class="lime darken-1 white-text">
              <p class="mb-0 my-2">#c0ca33 lime darken-1</p>
            </div>
            <div class="lime darken-2 white-text">
              <p class="mb-0 my-2">#afb42b lime darken-2</p>
            </div>
            <div class="lime darken-3 white-text">
              <p class="mb-0 my-2">#9e9d24 lime darken-3</p>
            </div>
            <div class="lime darken-4 white-text">
              <p class="mb-0 my-2">#827717 lime darken-4</p>
            </div>
            <div class="lime accent-1">
              <p class="mb-0 my-2">#f4ff81 lime accent-1</p>
            </div>
            <div class="lime accent-2">
              <p class="mb-0 my-2">#eeff41 lime accent-2</p>
            </div>
            <div class="lime accent-3">
              <p class="mb-0 my-2">#c6ff00 lime accent-3</p>
            </div>
            <div class="lime accent-4 white-text">
              <p class="mb-0 my-2">#aeea00 lime accent-4</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="yellow lighten-5">
              <p class="mb-0 my-2">#fffde7 yellow lighten-5</p>
            </div>
            <div class="yellow lighten-4">
              <p class="mb-0 my-2">#fff9c4 yellow lighten-4</p>
            </div>
            <div class="yellow lighten-3">
              <p class="mb-0 my-2">#fff59d yellow lighten-3</p>
            </div>
            <div class="yellow lighten-2">
              <p class="mb-0 my-2">#fff176 yellow lighten-2</p>
            </div>
            <div class="yellow lighten-1">
              <p class="mb-0 my-2">#ffee58 yellow lighten-1</p>
            </div>
            <div class="yellow">
              <p class="mb-0 my-2">#ffeb3b yellow</p>
            </div>
            <div class="yellow darken-1 white-text">
              <p class="mb-0 my-2">#fdd835 yellow darken-1</p>
            </div>
            <div class="yellow darken-2 white-text">
              <p class="mb-0 my-2">#fbc02d yellow darken-2</p>
            </div>
            <div class="yellow darken-3 white-text">
              <p class="mb-0 my-2">#f9a825 yellow darken-3</p>
            </div>
            <div class="yellow darken-4 white-text">
              <p class="mb-0 my-2">#f57f17 yellow darken-4</p>
            </div>
            <div class="yellow accent-1">
              <p class="mb-0 my-2">#ffff8d yellow accent-1</p>
            </div>
            <div class="yellow accent-2">
              <p class="mb-0 my-2">#ffff00 yellow accent-2</p>
            </div>
            <div class="yellow accent-3">
              <p class="mb-0 my-2">#ffea00 yellow accent-3</p>
            </div>
            <div class="yellow accent-4 white-text">
              <p class="mb-0 my-2">#ffd600 yellow accent-4</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="amber lighten-5">
              <p class="mb-0 my-2">#fff8e1 amber lighten-5</p>
            </div>
            <div class="amber lighten-4">
              <p class="mb-0 my-2">#ffecb3 amber lighten-4</p>
            </div>
            <div class="amber lighten-3">
              <p class="mb-0 my-2">#ffe082 amber lighten-3</p>
            </div>
            <div class="amber lighten-2">
              <p class="mb-0 my-2">#ffd54f amber lighten-2</p>
            </div>
            <div class="amber lighten-1">
              <p class="mb-0 my-2">#ffca28 amber lighten-1</p>
            </div>
            <div class="amber">
              <p class="mb-0 my-2">#ffc107 amber</p>
            </div>
            <div class="amber darken-1 white-text">
              <p class="mb-0 my-2">#ffb300 amber darken-1</p>
            </div>
            <div class="amber darken-2 white-text">
              <p class="mb-0 my-2">#ffa000 amber darken-2</p>
            </div>
            <div class="amber darken-3 white-text">
              <p class="mb-0 my-2">#ff8f00 amber darken-3</p>
            </div>
            <div class="amber darken-4 white-text">
              <p class="mb-0 my-2">#ff6f00 amber darken-4</p>
            </div>
            <div class="amber accent-1">
              <p class="mb-0 my-2">#ffe57f amber accent-1</p>
            </div>
            <div class="amber accent-2">
              <p class="mb-0 my-2">#ffd740 amber accent-2</p>
            </div>
            <div class="amber accent-3">
              <p class="mb-0 my-2">#ffc400 amber accent-3</p>
            </div>
            <div class="amber accent-4 white-text">
              <p class="mb-0 my-2">#ffab00 amber accent-4</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="orange lighten-5">
              <p class="mb-0 my-2">#fff3e0 orange lighten-5</p>
            </div>
            <div class="orange lighten-4">
              <p class="mb-0 my-2">#ffe0b2 orange lighten-4</p>
            </div>
            <div class="orange lighten-3">
              <p class="mb-0 my-2">#ffcc80 orange lighten-3</p>
            </div>
            <div class="orange lighten-2">
              <p class="mb-0 my-2">#ffb74d orange lighten-2</p>
            </div>
            <div class="orange lighten-1">
              <p class="mb-0 my-2">#ffa726 orange lighten-1</p>
            </div>
            <div class="orange">
              <p class="mb-0 my-2">#ff9800 orange</p>
            </div>
            <div class="orange darken-1 white-text">
              <p class="mb-0 my-2">#fb8c00 orange darken-1</p>
            </div>
            <div class="orange darken-2 white-text">
              <p class="mb-0 my-2">#f57c00 orange darken-2</p>
            </div>
            <div class="orange darken-3 white-text">
              <p class="mb-0 my-2">#ef6c00 orange darken-3</p>
            </div>
            <div class="orange darken-4 white-text">
              <p class="mb-0 my-2">#e65100 orange darken-4</p>
            </div>
            <div class="orange accent-1">
              <p class="mb-0 my-2">#ffd180 orange accent-1</p>
            </div>
            <div class="orange accent-2">
              <p class="mb-0 my-2">#ffab40 orange accent-2</p>
            </div>
            <div class="orange accent-3">
              <p class="mb-0 my-2">#ff9100 orange accent-3</p>
            </div>
            <div class="orange accent-4 white-text">
              <p class="mb-0 my-2">#ff6d00 orange accent-4</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="deep-orange lighten-5">
              <p class="mb-0 my-2">#fbe9e7 deep-orange lighten-5</p>
            </div>
            <div class="deep-orange lighten-4">
              <p class="mb-0 my-2">#ffccbc deep-orange lighten-4</p>
            </div>
            <div class="deep-orange lighten-3">
              <p class="mb-0 my-2">#ffab91 deep-orange lighten-3</p>
            </div>
            <div class="deep-orange lighten-2">
              <p class="mb-0 my-2">#ff8a65 deep-orange lighten-2</p>
            </div>
            <div class="deep-orange lighten-1">
              <p class="mb-0 my-2">#ff7043 deep-orange lighten-1</p>
            </div>
            <div class="deep-orange">
              <p class="mb-0 my-2">#ff5722 deep-orange</p>
            </div>
            <div class="deep-orange darken-1 white-text">
              <p class="mb-0 my-2">#f4511e deep-orange darken-1</p>
            </div>
            <div class="deep-orange darken-2 white-text">
              <p class="mb-0 my-2">#e64a19 deep-orange darken-2</p>
            </div>
            <div class="deep-orange darken-3 white-text">
              <p class="mb-0 my-2">#d84315 deep-orange darken-3</p>
            </div>
            <div class="deep-orange darken-4 white-text">
              <p class="mb-0 my-2">#bf360c deep-orange darken-4</p>
            </div>
            <div class="deep-orange accent-1">
              <p class="mb-0 my-2">#ff9e80 deep-orange darken-1</p>
            </div>
            <div class="deep-orange accent-2">
              <p class="mb-0 my-2">#ff6e40 deep-orange darken-2</p>
            </div>
            <div class="deep-orange accent-3">
              <p class="mb-0 my-2">#ff3d00 deep-orange darken-3</p>
            </div>
            <div class="deep-orange accent-4 white-text">
              <p class="mb-0 my-2">#dd2c00 deep-orange darken-4</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="brown lighten-5">
              <p class="mb-0 my-2">#efebe9 brown lighten-5</p>
            </div>
            <div class="brown lighten-4">
              <p class="mb-0 my-2">#d7ccc8 brown lighten-4</p>
            </div>
            <div class="brown lighten-3">
              <p class="mb-0 my-2">#bcaaa4 brown lighten-3</p>
            </div>
            <div class="brown lighten-2">
              <p class="mb-0 my-2">#a1887f brown lighten-2</p>
            </div>
            <div class="brown lighten-1">
              <p class="mb-0 my-2">#8d6e63 brown lighten-1</p>
            </div>
            <div class="brown">
              <p class="mb-0 my-2">#795548 brown</p>
            </div>
            <div class="brown darken-1 white-text">
              <p class="mb-0 my-2">#6d4c41 brown darken-1</p>
            </div>
            <div class="brown darken-2 white-text">
              <p class="mb-0 my-2">#5d4037 brown darken-2</p>
            </div>
            <div class="brown darken-3 white-text">
              <p class="mb-0 my-2">#4e342e brown darken-3</p>
            </div>
            <div class="brown darken-4 white-text">
              <p class="mb-0 my-2">#3e2723 brown darken-4</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="grey lighten-5">
              <p class="mb-0 my-2">#fafafa grey lighten-5</p>
            </div>
            <div class="grey lighten-4">
              <p class="mb-0 my-2">#f5f5f5 grey lighten-4</p>
            </div>
            <div class="grey lighten-3">
              <p class="mb-0 my-2">#eeeeee grey lighten-3</p>
            </div>
            <div class="grey lighten-2">
              <p class="mb-0 my-2">#e0e0e0 grey lighten-2</p>
            </div>
            <div class="grey lighten-1">
              <p class="mb-0 my-2">#bdbdbd grey lighten-1</p>
            </div>
            <div class="grey">
              <p class="mb-0 my-2">#9e9e9e grey</p>
            </div>
            <div class="grey darken-1 white-text">
              <p class="mb-0 my-2">#757575 grey darken-1</p>
            </div>
            <div class="grey darken-2 white-text">
              <p class="mb-0 my-2">#616161 grey darken-2</p>
            </div>
            <div class="grey darken-3 white-text">
              <p class="mb-0 my-2">#424242 grey darken-3</p>
            </div>
            <div class="grey darken-4 white-text">
              <p class="mb-0 my-2">#212121 grey darken-4</p>
            </div>
          </div>
          <div class="col-md-4 mb-md-0">
            <div class="blue-grey lighten-5">
              <p class="mb-0 my-2">#eceff1 blue-grey lighten-5</p>
            </div>
            <div class="blue-grey lighten-4">
              <p class="mb-0 my-2">#cfd8dc blue-grey lighten-4</p>
            </div>
            <div class="blue-grey lighten-3">
              <p class="mb-0 my-2">#b0bec5 blue-grey lighten-3</p>
            </div>
            <div class="blue-grey lighten-2">
              <p class="mb-0 my-2">#90a4ae blue-grey lighten-2</p>
            </div>
            <div class="blue-grey lighten-1">
              <p class="mb-0 my-2">#78909c blue-grey lighten-1</p>
            </div>
            <div class="blue-grey">
              <p class="mb-0 my-2">#607d8b blue-grey</p>
            </div>
            <div class="blue-grey darken-1 white-text">
              <p class="mb-0 my-2">#546e7a blue-grey darken-1</p>
            </div>
            <div class="blue-grey darken-2 white-text">
              <p class="mb-0 my-2">#455a64 blue-grey darken-2</p>
            </div>
            <div class="blue-grey darken-3 white-text">
              <p class="mb-0 my-2">#37474f blue-grey darken-3</p>
            </div>
            <div class="blue-grey darken-4 white-text">
              <p class="mb-0 my-2">#263238 blue-grey darken-4</p>
            </div>
          </div>
          <div class="col-md-4 mb-md-0">
            <div class="black white-text">
              <p class="mb-0 my-2">#000000 black</p>
            </div>
            <div class="white">
              <p class="mb-0 my-2">#ffffff white</p>
            </div>
            <div class="transparent">
              <p>transparent</p>
            </div>
          </div>
          <div class="col-md-4 mb-md-0">
            <div class="mdb-color lighten-5">
              <p class="mb-0 my-2">#eceff1 mdb-color lighten-5</p>
            </div>
            <div class="mdb-color lighten-4">
              <p class="mb-0 my-2">#cfd8dc mdb-color lighten-4</p>
            </div>
            <div class="mdb-color lighten-3">
              <p class="mb-0 my-2">#b0bec5 mdb-color lighten-3</p>
            </div>
            <div class="mdb-color lighten-2">
              <p class="mb-0 my-2">#90a4ae mdb-color lighten-2</p>
            </div>
            <div class="mdb-color lighten-1 white-text">
              <p class="mb-0 my-2">#78909c mdb-color lighten-1</p>
            </div>
            <div class="mdb-color white-text">
              <p class="mb-0 my-2">#607d8b mdb-color</p>
            </div>
            <div class="mdb-color darken-1 white-text">
              <p class="mb-0 my-2">#546e7a mdb-color darken-1</p>
            </div>
            <div class="mdb-color darken-2 white-text">
              <p class="mb-0 my-2">#455a64 mdb-color darken-2</p>
            </div>
            <div class="mdb-color darken-3 white-text">
              <p class="mb-0 my-2">#37474f mdb-color darken-3</p>
            </div>
            <div class="mdb-color darken-4 white-text">
              <p class="mb-0 my-2">#263238 mdb-color darken-4</p>
            </div>
          </div>

        </div>
        <!-- Grid row -->

      </section>
    </section>

    <hr class="my-5">

    <section id="masks">
      <h3 class="section-heading h1 mb-5">Masks</h3>
      <h5 class="mb-5">Patterns</h5>
      <section>
        <div class="row">
          <div class="col-md-6 mb-5">
            <div class="view">
              <img src="https://mdbootstrap.com/img/Photos/Others/nature-sm.jpg" class="img-fluid z-depth-1" alt="Image of ballons flying over canyons with mask pattern one.">
              <div class="mask rgba-white-slight flex-center">
                <p class="white-text">no mask</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-5">
            <div class="view">
              <img src="https://mdbootstrap.com/img/Photos/Others/nature-sm.jpg" class="img-fluid z-depth-1" alt="Image of ballons flying over canyons with mask pattern one.">
              <div class="mask pattern-1 flex-center">
                <p class="white-text">.pattern-1</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-5">
            <div class="view">
              <img src="https://mdbootstrap.com/img/Photos/Others/nature-sm.jpg" class="img-fluid z-depth-1" alt="Image of ballons flying over canyons with mask pattern one.">
              <div class="mask pattern-2 flex-center">
                <p class="white-text">.pattern-2</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-5">
            <div class="view">
              <img src="https://mdbootstrap.com/img/Photos/Others/nature-sm.jpg" class="img-fluid z-depth-1" alt="Image of ballons flying over canyons with mask pattern one.">
              <div class="mask pattern-3 flex-center">
                <p class="white-text">.pattern-3</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-5">
            <div class="view">
              <img src="https://mdbootstrap.com/img/Photos/Others/nature-sm.jpg" class="img-fluid z-depth-1" alt="Image of ballons flying over canyons with mask pattern one.">
              <div class="mask pattern-4 flex-center">
                <p class="white-text">.pattern-4</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-5">
            <div class="view">
              <img src="https://mdbootstrap.com/img/Photos/Others/nature-sm.jpg" class="img-fluid z-depth-1" alt="Image of ballons flying over canyons with mask pattern one.">
              <div class="mask pattern-5 flex-center">
                <p class="white-text">.pattern-5</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-5">
            <div class="view">
              <img src="https://mdbootstrap.com/img/Photos/Others/nature-sm.jpg" class="img-fluid z-depth-1" alt="Image of ballons flying over canyons with mask pattern one.">
              <div class="mask pattern-6 flex-center">
                <p class="white-text">.pattern-6</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-5">
            <div class="view">
              <img src="https://mdbootstrap.com/img/Photos/Others/nature-sm.jpg" class="img-fluid z-depth-1" alt="Image of ballons flying over canyons with mask pattern one.">
              <div class="mask pattern-7 flex-center">
                <p class="white-text">.pattern-7</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-5">
            <div class="view">
              <img src="https://mdbootstrap.com/img/Photos/Others/nature-sm.jpg" class="img-fluid z-depth-1" alt="Image of ballons flying over canyons with mask pattern one.">
              <div class="mask pattern-8 flex-center">
                <p class="white-text">.pattern-8</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-5">
            <div class="view">
              <img src="https://mdbootstrap.com/img/Photos/Others/nature-sm.jpg" class="img-fluid z-depth-1" alt="Image of ballons flying over canyons with mask pattern one.">
              <div class="mask pattern-9 flex-center">
                <p class="white-text">.pattern-9</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <h5 class="mb-5">Overlays</h5>
      <section>

        <!--Grid row-->
        <div class="row">

          <!--Grid column-->
          <div class="col-md-12 mb-5">

            <div class="view">
              <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(129).jpg" class="img-fluid" alt="">
              <div class="mask flex-center rgba-teal-slight">
                <h5 class="white-text font-weight-bold">slight overlay</h5>
              </div>
            </div>

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-6 mb-5">

            <div class="view">
              <img src="https://mdbootstrap.com/img/Photos/Others/forest-sm.jpg" class="img-fluid z-depth-1" alt="CSS section - example photo">
              <div class="mask flex-center rgba-teal-light">
                <h5 class="white-text font-weight-bold">light overlay</h5>
              </div>
            </div>

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-6 mb-5">

            <div class="view">
              <img src="https://mdbootstrap.com/img/Photos/Others/forest-sm.jpg" class="img-fluid z-depth-1" alt="CSS section - example photo">
              <div class="mask flex-center rgba-teal-strong">
                <h5 class="white-text font-weight-bold">strong overlay</h5>
              </div>
            </div>

          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </section>
      <!--Section: Overlays-->

    </section>

    <hr class="mb-5">
    
    <section id="typography">

      <!-- Section heading -->
      <h3 class="section-heading h1 mb-5">Typography</h3>

      <!--Grid row-->
      <div class="row">

        <!--Grid column-->
        <div class="col-md-12">

          <blockquote class="blockquote">
            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem dolores placeat
              reprehenderit deserunt
              sit, nulla natus autem voluptatibus explicabo sint iste amet iure, temporibus eius, ipsum asperiores
              quas fuga.</p>
          </blockquote>

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-12">

          <blockquote class="blockquote blockquote-reverse">
            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
            <footer class="blockquote-footer">Someone famous in
              <cite title="Source Title">Source Title</cite>
            </footer>
          </blockquote>

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

      <!--Grid row-->
      <div class="row text-left mt-5">

        <!--Grid column-->
        <div class="col-md-8">

          <blockquote class="blockquote bq-primary">
            <p class="bq-title">Info notification</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores quibusdam dignissimos itaque harum
              illo! Quidem, corporis at quae tempore nisi impedit.</p>
          </blockquote>

          <blockquote class="blockquote bq-warning">
            <p class="bq-title">Warning notification</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores quibusdam dignissimos itaque harum
              illo! Quidem, corporis at quae tempore nisi impedit.</p>
          </blockquote>

          <blockquote class="blockquote bq-success">
            <p class="bq-title">Success notification</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores quibusdam dignissimos itaque harum
              illo! Quidem, corporis at quae tempore nisi impedit.</p>
          </blockquote>

          <blockquote class="blockquote bq-danger">
            <p class="bq-title">Danger notification</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores quibusdam dignissimos itaque harum
              illo! Quidem, corporis at quae tempore nisi impedit.</p>
          </blockquote>

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-4">

          <p class="red-text">Lorem ipsum dolor sit amet, consectetur.</p>
          <p class="pink-text">Impedit architecto, totam hic sunt eum odio.</p>
          <p class="purple-text">Similique ex, expedita minus assumenda.</p>
          <p class="deep-purple-text">Veritatis eum libero nam, adipisci.</p>
          <p class="indigo-text">Sapiente, ea. Molestias sunt nihil saepe</p>
          <p class="blue-text">Sapiente sit, possimus maiores, quo alias.</p>
          <p class="light-blue-text">Corrupti adipisci, praesentium iusto eos.</p>
          <p class="cyan-text">Odio autem veritatis aliquam consequuntur.</p>
          <p class="teal-text">Similique, adipisci ea, sequi magnam sit inventore.</p>
          <p class="green-text">Eos et vitae, odit deserunt dignissimos voluptas.</p>
          <p class="light-green-text">Fugit nihil numquam inventore accusantium.</p>
          <p class="lime-text">Sed odit inventore illum excepturi officia.</p>
          <p class="yellow-text">At odio animi distinctio, aut enim tempora nobis.</p>
          <p class="amber-text">Quo at accusamus vel earum hic, inventore non.</p>
          <p class="orange-text">Iusto odit eos distinctio temporibus voluptates.</p>
          <p class="deep-orange-text">Quas fugit fuga assumenda nihil esse et.</p>
          <p class="brown-text">Excepturi iusto amet sunt illo ad debitis quibusdam.</p>
          <p class="grey-text">Non sint nulla incidunt, odit repellat tempore.</p>
          <p class="blue-grey-text">Eius, provident. Quo similique, repellat atque.</p>

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

      <!--Grid row-->
      <div class="row text-left mt-5">

        <!--Grid column-->
        <div class="col-md-3">

          <h5 class="pb-4 mb-5">Responsive headings</h5>

          <h3 class="section-heading h1-responsive">h1. heading</h3>

          <h2 class="h2-responsive">h2. heading</h2>

          <h3 class="h3-responsive">h3. heading</h3>

          <h4 class="h4-responsive">h4. heading</h4>

          <h5 class="h5-responsive">h5. heading</h5>

          <h6 class="h6-responsive">h6. heading</h6>


        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-5">

          <h5 class="pb-4 mb-5">Inline text elements</h5>

          <p>You can use the mark tag to
            <mark>highlight</mark> text.</p>
          <p>
            <del>This line of text is meant to be treated as deleted text.</del>
          </p>
          <p>
            <u>This line of text will render as underlined</u>
          </p>
          <p>
            <small>This line of text is meant to be treated as fine print.</small>
          </p>
          <p>
            <strong>This line rendered as bold text.</strong>
          </p>
          <p>
            <em>This line rendered as italicized text.</em>
          </p>

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-4">

          <h5 class="pb-2 mb-5">Display headings</h5>

          <h3 class="display-2">Display 2</h3>
          <h3 class="display-3">Display 3</h3>
          <h3 class="display-4">Display 4</h3>

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

    </section>
      
      <hr class="my-5">
      
      <section id="icons">
  
        <!-- Section heading -->
        <h3 class="section-heading h1 mb-5">Icons</h3>
  
        <!--Grid row-->
        <div class="row">
  
          <!--First column-->
          <div class="col-md-3">
  
            <ul class="list-unstyled">
              <li>
                <i class="fas fa-camera-retro fa-lg mb-1 deep-purple-text"></i> fa-lg</li>
              <li>
                <i class="fal fa-camera-retro fa-2x mb-1 deep-purple-text"></i> fa-2x</li>
              <li>
                <i class="fab fa-camera-retro fa-3x mb-1 deep-purple-text"></i> fa-3x</li>
              <li>
                <i class="fa fa-camera-retro fa-4x mb-1 deep-purple-text"></i> fa-4x</li>
              <li>
                <i class="far fa-camera-retro fa-5x mb-1 deep-purple-text"></i> fa-5x</li>
            </ul>
  
          </div>
          <!--/First column-->
  
          <!--Second column-->
          <div class="col-md-3">
  
            <ul class="list-unstyled">
              <li>
                <i class="far fa-heart fa-lg mb-1 red-text"></i> fa-lg</li>
              <li>
                <i class="far fa-heart fa-2x mb-1 red-text"></i> fa-2x</li>
              <li>
                <i class="far fa-heart fa-3x mb-1 red-text"></i> fa-3x</li>
              <li>
                <i class="far fa-heart fa-4x mb-1 red-text"></i> fa-4x</li>
              <li>
                <i class="far fa-heart fa-5x mb-1 red-text"></i> fa-5x</li>
            </ul>
  
          </div>
          <!--/Second column-->
  
          <!--Third column-->
          <div class="col-md-3">
  
            <ul class="list-unstyled">
              <li>
                <i class="fas fa-arrow-circle-up fa-lg mb-1 cyan-text"></i> fa-lg</li>
              <li>
                <i class="fas fa-arrow-circle-up fa-2x mb-1 cyan-text"></i> fa-2x</li>
              <li>
                <i class="fas fa-arrow-circle-up fa-3x mb-1 cyan-text"></i> fa-3x</li>
              <li>
                <i class="fas fa-arrow-circle-up fa-4x mb-1 cyan-text"></i> fa-4x</li>
              <li>
                <i class="fas fa-arrow-circle-up fa-5x mb-1 cyan-text"></i> fa-5x</li>
            </ul>
  
          </div>
          <!--/Third column-->
  
          <!--Fourth column-->
          <div class="col-md-3">
  
            <ul class="list-unstyled">
              <li>
                <i class="fab fa-snapchat-ghost fa-lg mb-1 amber-text"></i> fa-lg</li>
              <li>
                <i class="fab fa-snapchat-ghost fa-2x mb-1 amber-text"></i> fa-2x</li>
              <li>
                <i class="fab fa-snapchat-ghost fa-3x mb-1 amber-text"></i> fa-3x</li>
              <li>
                <i class="fab fa-snapchat-ghost fa-4x mb-1 amber-text"></i> fa-4x</li>
              <li>
                <i class="fab fa-snapchat-ghost fa-5x mb-1 amber-text"></i> fa-5x</li>
            </ul>
  
          </div>
          <!--/Fourth column-->
  
        </div>
        <!--Grid row-->
  
      </section>

      <hr class="my-5">

      <section id="skins">
  
        <!-- Section heading -->
        <h3 class="section-heading h1 mb-5">Skins</h3>
  
        <!--Grid row-->
        <div class="row">
  
          <div class="col-md-6 mb-5">
            <div class="view overlay z-depth-1-half">
              <img src="https://mdbootstrap.com/img/screens/skins/white.jpg" alt="Material Design for Bootstrap white skin"
                class="img-fluid">
  
              <div class="mask rgba-white-slight">
              </div>
            </div>
  
            <h3 class="h3 pt-4 mt-1 pb-3">White Skin</h3>
            <a href="https://mdbootstrap.com/snippets/jquery/mdbootstrap/98613" class="btn btn-info mt-1">Live
              preview</a>
          </div>
  
          <div class="col-md-6 mb-5">
            <div class="view overlay z-depth-1-half">
              <img src="https://mdbootstrap.com/img/screens/skins/black.jpg" alt="Material Design for Bootstrap black skin"
                class="img-fluid">
  
              <div class="mask rgba-white-slight">
              </div>
            </div>
  
            <h3 class="h3 pt-4 mt-1 pb-3">Black Skin</h3>
            <a href="https://mdbootstrap.com/snippets/jquery/mdbootstrap/98624" class="btn btn-info mt-1">Live
              preview</a>
          </div>
  
        </div>
  
        <div class="row">
  
          <div class="col-md-6 mb-5">
            <div class="view overlay z-depth-1-half">
              <img src="https://mdbootstrap.com/img/screens/skins/cyan.jpg" alt="Material Design for Bootstrap cyan skin"
                class="img-fluid">
  
              <div class="mask rgba-white-slight">
              </div>
            </div>
  
            <h3 class="h3 pt-4 mt-1 pb-3">Cyan Skin</h3>
            <a href="https://mdbootstrap.com/snippets/jquery/mdbootstrap/98648" class="btn btn-info mt-1">Live
              preview</a>
          </div>
  
          <div class="col-md-6 mb-5">
            <div class="view overlay z-depth-1-half">
              <img src="https://mdbootstrap.com/img/screens/skins/mdb.jpg" alt="Material Design for Bootstrap mdb skin"
                class="img-fluid">
  
              <div class="mask rgba-white-slight">
              </div>
            </div>
  
            <h3 class="h3 pt-4 mt-1 pb-3">MDB Skin</h3>
            <a href="https://mdbootstrap.com/snippets/jquery/mdbootstrap/98644" class="btn btn-info mt-1">Live
              preview</a>
          </div>
  
        </div>
  
        <div class="row">
  
          <div class="col-md-6 mb-5">
            <div class="view overlay z-depth-1-half">
              <img src="https://mdbootstrap.com/img/screens/skins/deep-purple.jpg" alt="Material Design for Bootstrap deep purple skin"
                class="img-fluid">
  
              <div class="mask rgba-white-slight">
              </div>
            </div>
  
            <h3 class="h3 pt-4 mt-1 pb-3">Deep purple Skin</h3>
            <a href="https://mdbootstrap.com/snippets/jquery/mdbootstrap/98655" class="btn btn-info mt-1">Live
              preview</a>
          </div>
  
          <div class="col-md-6 mb-5">
            <div class="view overlay z-depth-1-half">
              <img src="https://mdbootstrap.com/img/screens/skins/navy-blue.jpg" alt="Material Design for Bootstrap navy blue skin"
                class="img-fluid">
  
              <div class="mask rgba-white-slight">
              </div>
            </div>
  
            <h3 class="h3 pt-4 mt-1 pb-3">Navy blue Skin</h3>
            <a href="https://mdbootstrap.com/snippets/jquery/mdbootstrap/98680" class="btn btn-info mt-1">Live
              preview</a>
          </div>
  
        </div>
  
        <div class="row">
  
          <div class="col-md-6 mb-5">
            <div class="view overlay z-depth-1-half">
              <img src="https://mdbootstrap.com/img/screens/skins/pink.jpg" alt="Material Design for Bootstrap pink skin"
                class="img-fluid">
  
              <div class="mask rgba-white-slight">
              </div>
            </div>
  
            <h3 class="h3 pt-4 mt-1 pb-3">Pink Skin</h3>
            <a href="https://mdbootstrap.com/snippets/jquery/mdbootstrap/98672" class="btn btn-info mt-1">Live
              preview</a>
          </div>
  
          <div class="col-md-6 mb-5">
            <div class="view overlay z-depth-1-half">
              <img src="https://mdbootstrap.com/img/screens/skins/indigo.jpg" alt="Material Design for Bootstrap indigo skin"
                class="img-fluid">
  
              <div class="mask rgba-white-slight">
              </div>
            </div>
  
            <h3 class="h3 pt-4 mt-1 pb-3">Indigo Skin</h3>
            <a href="https://mdbootstrap.com/snippets/jquery/mdbootstrap/98664" class="btn btn-info mt-1">Live
              preview</a>
          </div>
  
        </div>
  
        <div class="row">
  
          <div class="col-md-6 mb-5">
            <div class="view overlay z-depth-1-half">
              <img src="https://mdbootstrap.com/img/screens/skins/light-blue.jpg" alt="Material Design for Bootstrap light blue skin"
                class="img-fluid">
  
              <div class="mask rgba-white-slight">
              </div>
            </div>
  
            <h3 class="h3 pt-4 mt-1 pb-3">Light blue Skin</h3>
            <a href="https://mdbootstrap.com/snippets/jquery/mdbootstrap/98685" class="btn btn-info mt-1">Live
              preview</a>
          </div>
  
          <div class="col-md-6 mb-5">
            <div class="view overlay z-depth-1-half">
              <img src="https://mdbootstrap.com/img/screens/skins/grey.jpg" alt="Material Design for Bootstrap grey skin"
                class="img-fluid">
  
              <div class="mask rgba-white-slight">
              </div>
            </div>
  
            <h3 class="h3 pt-4 mt-1 pb-3">Grey Skin</h3>
            <a href="https://mdbootstrap.com/snippets/jquery/mdbootstrap/98691" class="btn btn-info mt-1">Live
              preview</a>
          </div>
  
        </div>
        <!--Grid row-->
  
      </section>
      
      <hr class="mt-0 mb-5">
      
      <section id="tables">
        <h3 class="section-heading h1 mb-5">Tables</h3>
  
        <h5 class="mb-5">Simple tables</h5>
  
        <!--Grid row-->
        <div class="row text-left">
  
          <!--Grid column-->
          <div class="col-md-12">
  
            <table class="table mb-5">
              <thead class="thead-default">
                <tr>
                  <th>#</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Username</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Larry</td>
                  <td>the Bird</td>
                  <td>@twitter</td>
                </tr>
              </tbody>
            </table>
  
          </div>
          <!--Grid column-->
  
          <!--Grid column-->
          <div class="col-md-12">
  
            <!--Table-->
            <table class="table mb-5">
  
              <!--Table head-->
              <thead class="blue-grey lighten-4">
                <tr>
                  <th>#</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Username</th>
                </tr>
              </thead>
              <!--Table head-->
  
              <!--Table body-->
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Larry</td>
                  <td>the Bird</td>
                  <td>@twitter</td>
                </tr>
              </tbody>
              <!--Table body-->
            </table>
            <!--Table-->
  
            <!--Table-->
            <table class="table mb-5">
  
              <!--Table head-->
              <thead class="mdb-color darken-3">
                <tr class="text-white">
                  <th>#</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Username</th>
                </tr>
              </thead>
              <!--Table head-->
  
              <!--Table body-->
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Larry</td>
                  <td>the Bird</td>
                  <td>@twitter</td>
                </tr>
              </tbody>
              <!--Table body-->
            </table>
            <!--Table-->
  
          </div>
          <!--Grid column-->
  
        </div>
        <!--Grid row-->
  
        <h5 class="mb-5">Hoverable rows</h5>
  
        <!--Grid row-->
        <div class="row text-left">
  
          <!--Grid column-->
          <div class="col-md-12 mb-5">
            <table class="table table-hover text-left mb-0">
              <thead>
                <tr>
                  <th>#</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Username</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Larry</td>
                  <td>the Bird</td>
                  <td>@twitter</td>
                </tr>
              </tbody>
            </table>
  
          </div>
          <!--Grid column-->
  
        </div>
        <!--Grid row-->
  
        <h5 class="mb-5">Shopping cart table</h5>
  
        <!--Grid row-->
        <div class="row text-left">
  
          <!--Grid column-->
          <div class="col-md-12 mb-5">
  
            <div class="card">
              <div class="card-body">
                <!-- Shopping Cart table -->
                <div class="table-responsive">
                  <table id="shopping" class="table product-table">
                    <!-- Table head -->
                    <thead class="mdb-color thead-res lighten-5">
                      <tr>
                        <th></th>
                        <th class="font-weight-bold">
                          <strong>Product</strong>
                        </th>
                        <th class="font-weight-bold">
                          <strong>Color</strong>
                        </th>
                        <th></th>
                        <th class="font-weight-bold">
                          <strong>Price</strong>
                        </th>
                        <th class="font-weight-bold">
                          <strong>QTY</strong>
                        </th>
                        <th class="font-weight-bold">
                          <strong>Amount</strong>
                        </th>
                        <th></th>
                      </tr>
                    </thead>
                    <!-- /.Table head -->
                    <!-- Table body -->
                    <tbody class="tbody-res">
                      <!-- First row -->
                      <tr>
                        <th scope="row">
                          <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/13.jpg" alt=""
                            class="img-fluid z-depth-0">
                        </th>
                        <td>
                          <h5 class="mt-3">
                            <strong>iPhone</strong>
                          </h5>
                          <p class="text-muted">Apple</p>
                        </td>
                        <td>White</td>
                        <td></td>
                        <td>$800</td>
                        <td class="center-on-small-only">
                          <span class="qty">1 </span>
                          <div class="btn-group radio-group ml-2" data-toggle="buttons">
                            <label class="btn btn-sm btn-primary btn-rounded">
                              <input type="radio" name="options" id="option1">—
                            </label>
                            <label class="btn btn-sm btn-primary btn-rounded">
                              <input type="radio" name="options" id="option2">+
                            </label>
                          </div>
                        </td>
                        <td class="font-weight-bold">
                          <strong>$800</strong>
                        </td>
                        <td>
                          <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top"
                            title="Remove item">X
                          </button>
                        </td>
                      </tr>
                      <!-- /.First row -->
                      <!-- Second row -->
                      <tr>
                        <th scope="row">
                          <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/6.jpg" alt="" class="img-fluid z-depth-0">
                        </th>
                        <td>
                          <h5 class="mt-3">
                            <strong>Headphones</strong>
                          </h5>
                          <p class="text-muted">Sony</p>
                        </td>
                        <td>Red</td>
                        <td></td>
                        <td>$200</td>
                        <td class="center-on-small-only">
                          <span class="qty">3 </span>
                          <div class="btn-group radio-group ml-2" data-toggle="buttons">
                            <label class="btn btn-sm btn-primary btn-rounded">
                              <input type="radio" name="options" id="option1">—
                            </label>
                            <label class="btn btn-sm btn-primary btn-rounded">
                              <input type="radio" name="options" id="option2">+
                            </label>
                          </div>
                        </td>
                        <td class="font-weight-bold">
                          <strong>$600</strong>
                        </td>
                        <td>
                          <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top"
                            title="Remove item">X
                          </button>
                        </td>
                      </tr>
                      <!-- /.Second row -->
                      <!-- Third row -->
                      <tr>
                        <th scope="row">
                          <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/1.jpg" alt="" class="img-fluid z-depth-0">
                        </th>
                        <td>
                          <h5 class="mt-3">
                            <strong>iPad Pro</strong>
                          </h5>
                          <p class="text-muted">Apple</p>
                        </td>
                        <td>Gold</td>
                        <td></td>
                        <td>$600</td>
                        <td class="center-on-small-only">
                          <span class="qty">2 </span>
                          <div class="btn-group radio-group ml-2" data-toggle="buttons">
                            <label class="btn btn-sm btn-primary btn-rounded">
                              <input type="radio" name="options" id="option1">—
                            </label>
                            <label class="btn btn-sm btn-primary btn-rounded">
                              <input type="radio" name="options" id="option2">+
                            </label>
                          </div>
                        </td>
                        <td class="font-weight-bold">
                          <strong>$1200</strong>
                        </td>
                        <td>
                          <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top"
                            title="Remove item">X
                          </button>
                        </td>
                      </tr>
                      <!-- /.Third row -->
                      <!-- Fourth row -->
                      <tr>
                        <td colspan="3"></td>
                        <td>
                          <h4 class="mt-2">
                            <strong>Total</strong>
                          </h4>
                        </td>
                        <td class="text-right">
                          <h4 class="mt-2">
                            <strong>$2600</strong>
                          </h4>
                        </td>
                        <td colspan="3" class="text-right">
                          <button type="button" class="btn btn-primary btn-rounded">Complete purchase
                            <i class="fas fa-angle-right right"></i>
                          </button>
                        </td>
                      </tr>
                      <!-- Fourth row -->
                    </tbody>
                    <!-- /.Table body -->
                  </table>
                </div>
                <!-- /.Shopping Cart table -->
              </div>
            </div>
  
          </div>
          <!--Grid column-->
  
        </div>
        <!--Grid row-->
  
      </section>

      <hr class="mb-5">
  
      <section id="shadows">
  
        <!-- Section heading -->
        <h3 class="section-heading h1 mb-5">Shadows</h3>
  
        <!--Grid row-->
        <div class="row">
  
          <div class="col-md-4 mb-5">
            <div class="shadow-box-example flex-center">
              <p class="white-text">no shadow</p>
            </div>
          </div>
  
          <div class="col-md-4 mb-5">
            <div class="shadow-box-example z-depth-1 flex-center">
              <p class="white-text">.z-depth-1</p>
            </div>
          </div>
  
          <div class="col-md-4 mb-5">
            <div class="shadow-box-example z-depth-2 flex-center">
              <p class="white-text">.z-depth-2</p>
            </div>
          </div>
  
        </div>
        <!--Grid row-->
  
        <!--Grid row-->
        <div class="row">
  
          <div class="col-md-4 mb-5">
            <div class="shadow-box-example z-depth-3 flex-center">
              <p class="white-text">.z-depth-3</p>
            </div>
          </div>
  
          <div class="col-md-4 mb-5">
            <div class="shadow-box-example z-depth-4 flex-center">
              <p class="white-text">.z-depth-4</p>
            </div>
          </div>
  
          <div class="col-md-4 mb-5">
            <div class="shadow-box-example z-depth-5 flex-center">
              <p class="white-text">.z-depth-5</p>
            </div>
          </div>
  
        </div>
        <!--Grid row-->
  
      </section>
  
      <hr class="mb-5">
  
      <section id="hover-effects">
  
        <!-- Section heading -->
        <h3 class="section-heading h1 mb-5">Hover effects</h3>
  
        <!--Grid row-->
        <div class="row">
  
          <!--Grid column-->
          <div class="col-lg-4 col-md-12 mb-5">
  
            <div class="view overlay">
              <img src="https://mdbootstrap.com/img/Photos/Others/forest-sm.jpg" class="img-fluid " alt="">
              <div class="mask flex-center rgba-red-strong">
                <p class="white-text">Strong overlay</p>
              </div>
            </div>
  
          </div>
          <!--Grid column-->
  
          <!--Grid column-->
          <div class="col-lg-4 col-md-6 mb-5">
  
            <div class="view overlay">
              <img src="https://mdbootstrap.com/img/Photos/Others/forest-sm.jpg" class="img-fluid " alt="">
              <div class="mask flex-center rgba-red-light">
                <p class="white-text">Light overlay</p>
              </div>
            </div>
  
          </div>
          <!--Grid column-->
  
          <!--Grid column-->
          <div class="col-lg-4 col-md-6 mb-5">
  
            <div class="view overlay">
              <img src="https://mdbootstrap.com/img/Photos/Others/forest-sm.jpg" class="img-fluid " alt="">
              <div class="mask flex-center rgba-red-slight">
                <p class="white-text">Super light overlay</p>
              </div>
            </div>
  
          </div>
          <!--Grid column-->
  
        </div>
        <!--Grid row-->
  
        <!--Grid row-->
        <div class="row">
  
          <!--Grid column-->
          <div class="col-md-6 mb-5">
  
            <div class="view overlay zoom">
              <img src="https://mdbootstrap.com/img/Photos/Others/images/81.jpg" class="img-fluid" alt="">
              <div class="mask rgba-white-slight d-flex justify-content-center align-items-center">
                <p class="white-text">Zoom effect</p>
              </div>
            </div>
  
          </div>
          <!--Grid column-->
  
          <!--Grid column-->
          <div class="col-md-6 mb-5">
  
            <h4 class="text-center">Shadow effect</h4>
            <br>
  
            <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/6-col/img%20(132).jpg" class="img-fluid rounded-circle hoverable"
              alt="CSS section - example photo">
  
          </div>
          <!--Grid column-->
  
        </div>
        <!--Grid row-->
  
      </section>
  
      <hr class="mb-5">
  
      <section id="media">
  
        <!-- Section heading -->
        <h3 class="section-heading h1 mb-5">Media</h3>
  
        <h5 class="mb-5">Image shapes</h5>
  
        <!--Grid row-->
        <div class="row">
  
          <!--Grid column-->
          <div class="col-md-4 mb-5">
  
            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(31).jpg" alt="Material Design for Bootstrap - example photo"
              class="img-fluid rounded z-depth-1-half">
  
          </div>
          <!--Grid column-->
  
          <!--Grid column-->
          <div class="col-md-4 mb-5">
  
            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(32).jpg" alt="Material Design for Bootstrap - example photo"
              class="img-fluid rounded-circle z-depth-1-half">
  
          </div>
          <!--Grid column-->
  
          <!--Grid column-->
          <div class="col-md-4 mb-5">
  
            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(10).jpg" alt="Material Design for Bootstrap - example photo"
              class="img-fluid img-thumbnail">
  
          </div>
          <!--Grid column-->
  
        </div>
        <!--Grid row-->
  
        <h5 class="mb-5">Aligning images</h5>
  
        <!--Grid row-->
        <div class="row">
  
          <!--Grid column-->
          <div class="col-md-12 mb-2">
  
            <h5 class="text-left">Float: left</h5>
            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(19).jpg" alt="Material Design for Bootstrap - example photo"
              class="rounded float-left z-depth-1">
  
          </div>
          <!--Grid column-->
  
          <!--Grid column-->
          <div class="col-md-12 mb-2">
  
            <h5 class="text-center">Float: center</h5>
            <div class="text-center">
              <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(20).jpg" alt="Material Design for Bootstrap - example photo"
                class="rounded z-depth-1">
            </div>
  
          </div>
          <!--Grid column-->
  
          <!--Grid column-->
          <div class="col-md-12">
  
            <h5 class="text-right">Float: right</h5>
            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg" alt="Material Design for Bootstrap - example photo"
              class="rounded float-right z-depth-1">
  
          </div>
          <!--Grid column-->
  
        </div>
        <!--Grid row-->
  
        <h5 class="my-5">Figures</h5>
  
        <!--Grid row-->
        <div class="row">
  
          <!--Grid column-->
          <div class="col-md-6 mb-5">
  
            <figure class="figure mb-0">
              <img src="https://mdbootstrap.com/img/Photos/Others/img%20(27).jpg" class="figure-img img-fluid z-depth-2"
                alt="...">
              <figcaption class="figure-caption text-left">A caption for the above image.</figcaption>
            </figure>
  
          </div>
          <!--Grid column-->
  
          <!--Grid column-->
          <div class="col-md-6 mb-5">
  
            <figure class="figure mb-0">
              <img src="https://mdbootstrap.com/img/Photos/Others/laptop-sm.jpg" class="figure-img img-fluid z-depth-2"
                alt="...">
              <figcaption class="figure-caption text-right">A caption for the above image.</figcaption>
            </figure>
  
          </div>
          <!--Grid column-->
  
        </div>
        <!--Grid row-->
  
      </section>
  
      <hr class="mt-0 mb-5">
  
      <section id="more-components">
  
        <!-- Section heading -->
        <h3 class="section-heading h1 mb-5">...and many more</h3>
  
        <!--First row-->
        <div class="row">
  
          <!--First column-->
          <div class="col-md-6 mb-5">
  
            <!--Featured image-->
            <div class="overlay z-depth-1-half">
              <img src="https://mdbootstrap.com/img/Others/sections.jpg" alt="Material Design for Bootstrap - Sections" class="img-fluid">
              <a href="https://mdbootstrap.com/docs/jquery/design-blocks/">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>
  
            <!--Excerpt-->
            <h4 class="font-weight-bold pt-4 pb-3 mt-2">Design Blocks</h4>
            <a href="https://mdbootstrap.com/docs/jquery/design-blocks/" class="btn btn-info">Live preview</a>
  
          </div>
          <!--/First column-->
  
          <!--Second column-->
          <div class="col-md-6 mb-5">
            <!--Featured image-->
            <div class="overlay z-depth-1-half">
              <img src="https://mdbootstrap.com/img/Others/templates.jpg" alt="Material Design for Bootstrap - Templates" class="img-fluid">
              <a href="https://mdbootstrap.com/templates-2/">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>
  
            <!--Excerpt-->
            <h4 class="font-weight-bold pt-4 pb-3 mt-2">Templates</h4>
            <a href="https://mdbootstrap.com/templates-2/" class="btn btn-info">Live preview</a>
  
          </div>
          <!--/Second column-->
  
          <!--Third column-->
          <div class="col-md-6 mb-5">
            <!--Featured image-->
            <div class="overlay z-depth-1-half">
              <img src="https://mdbootstrap.com/img/Others/java-script.jpg" alt="Material Design for Bootstrap - JavaScript" class="img-fluid">
              <a href="https://mdbootstrap.com/docs/jquery/javascript/demo/">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>
  
            <!--Excerpt-->
            <h4 class="font-weight-bold pt-4 pb-3 mt-2">JavaScript</h4>
            <a href="https://mdbootstrap.com/docs/jquery/javascript/demo/" class="btn btn-info">Live preview</a>
  
          </div>
          <!--/Third column-->
  
          <!--Fourth column-->
          <div class="col-md-6 mb-5">
            <!--Featured image-->
            <div class="overlay z-depth-1-half">
              <img src="https://mdbootstrap.com/img/Others/components-new.jpg" alt="Material Design for Bootstrap - Components" class="img-fluid">
              <a href="https://mdbootstrap.com/docs/jquery/components/demo/">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>
  
            <!--Excerpt-->
            <h4 class="font-weight-bold pt-4 pb-3 mt-2">Components</h4>
            <a href="https://mdbootstrap.com/docs/jquery/components/demo/" class="btn btn-info">Live preview</a>
  
          </div>
          <!--/Fourth column-->
  
        </div>
        <!--/First row-->
  
      </section>
  
    </div>
  
@endsection
