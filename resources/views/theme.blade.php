@extends('layout')

@section('title', 'Themes')

@section('content') 


<div class="theme">
	<section class="theme__picker">

		<div class="theme__item">
			<div class="theme__item--text">
				<h3 class="theme__item--title">Light Theme</h3>
				<p class="theme__item--para">A great theme for people who still use light theme for some ungodly reason, just ignore this and use dark please</p>
			</div>
			<img src="../img/logo.svg" class="theme__item--img"/>
		</div>
		<hr>

				<div class="theme__item">
			<div class="theme__item--text">
				<h3 class="theme__item--title">Dark Theme</h3>
				<p class="theme__item--para">The perfect theme, you'd be insane to not choose this sweet thing</p>
			</div>
			<img src="../img/logo.svg" class="theme__item--img"/>
		</div>
		<hr>

				<div class="theme__item">
			<div class="theme__item--text">
				<h3 class="theme__item--title">Beaker Theme</h3>
				<p class="theme__item--para">The standard issue beans, a very normal theme that serves a very normal purpose</p>
			</div>
			<img src="../img/logo.svg" class="theme__item--img"/>
		</div>
		<hr>
		
	</section>

	<section class="theme__view">

		<div class="text__title">
			<h2 class="text__heading">Your Themed Heading</h2>
			        <label class="text__font">Font
	            <select id="font-choice" class="input input__dropdown beaker__border">
	        	<optgroup label="Sans-Serif">
	        	<option id="Roboto Mono" value="Roboto Mono">Roboto Mono (Default Font)</option>
	        	<option id="proxima-nova" value="proxima-nova">Proxima Nova</option>
	        	<option id="brandon-grotesque" value="brandon-grotesque">Brandon Grotesque</option>
	        	<option id="futura-pt" value="futura-pt">Futura PT</option>
	        	<option id="agenda" value="agenda">Agenda</option>
	        	<option id="farm-new" value="farm-new">Farm New</option>
	        	<option id="bebas-neue-rounded" value="bebas-neue-rounded">Bebas Neue Rounded</option>
	        	<option id="covik-sans" value="covik-sans">Covik Sans</option>
				</optgroup>

	        	<optgroup label="Serif">
	        	<option id="acuta" value="acuta">Acuta</option>
	        	<option id="starling" value="starling">Starling</option>
	        	<option id="gelo" value="gelo">Gelo</option>
	        	<option id="Times New Roman" value="Times New Roman">Times New Roman</option>
				</optgroup>

				<optgroup label="Script/Handwriting">
	        	<option id="ff-providence-web-pro" value="ff-providence-web-pro">FF Providence Pro</option>
	        	<option id="fertigo-script" value="fertigo-script">Fertigo Pro Script</option>
	        	<option id="caflisch-script-pro" value="caflisch-script-pro">Caflisch Script Pro</option>
	        	<option id="gooddog-new" value="gooddog-new">GoodDog New</option>
	        	<option id="blambot-fx-pro" value="blambot-fx-pro">Blambot FX Pro</option>
	        	<option id="sketchnote-text" value="sketchnote-text">Sketchnote Text</option>
	        	<option id="sketchnote-square" value="sketchnote-square">Sketchnote Square</option>
	        	<option id="chantal" value="chantal">Chantal</option>
	        	<option id="voltage" value="voltage">Voltage</option>
				</optgroup>
				
				<optgroup label="Dyslexia Friendly">
	        	<option id="OpenDyslexic" value="OpenDyslexic">OpenDyslexic</option>
				</optgroup>
	            </select>
	        </label>

	        <label class="text__font">Weight
	            <select id="font-weight" class="input input__dropdown beaker__border">
	                <option value="400">Light</option>
	                <option value="600">Medium</option>
	                <option value="700">Heavy</option>
	                <option value="900">Black</option>
	            </select>
	        </label>

	        <label class="text__font">Line Height
	            <select id="font-height" class="input input__dropdown beaker__border">
	                <option value="1.5">1.5</option>
	                <option value="2">2</option>
	                <option value="3.5">2.5</option>
	                <option value="3">3</option>
	            </select>
	        </label>

	    </div>

		<p class="text__para">"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est.</p>
		<div class="text__title">
			<label class="text__font--para">Font
	            <select id="font-choice-para" class="input input__dropdown beaker__border">
	        	<optgroup label="Sans-Serif">
	        	<option id="Roboto Mono" value="Roboto Mono">Roboto Mono (Default Font)</option>
	        	<option id="proxima-nova" value="proxima-nova">Proxima Nova</option>
	        	<option id="brandon-grotesque" value="brandon-grotesque">Brandon Grotesque</option>
	        	<option id="futura-pt" value="futura-pt">Futura PT</option>
	        	<option id="agenda" value="agenda">Agenda</option>
	        	<option id="farm-new" value="farm-new">Farm New</option>
	        	<option id="bebas-neue-rounded" value="bebas-neue-rounded">Bebas Neue Rounded</option>
	        	<option id="covik-sans" value="covik-sans">Covik Sans</option>
				</optgroup>

	        	<optgroup label="Serif">
	        	<option id="acuta" value="acuta">Acuta</option>
	        	<option id="starling" value="starling">Starling</option>
	        	<option id="gelo" value="gelo">Gelo</option>
	        	<option id="Times New Roman" value="Times New Roman">Times New Roman</option>
				</optgroup>

				<optgroup label="Script/Handwriting">
	        	<option id="ff-providence-web-pro" value="ff-providence-web-pro">FF Providence Pro</option>
	        	<option id="fertigo-script" value="fertigo-script">Fertigo Pro Script</option>
	        	<option id="caflisch-script-pro" value="caflisch-script-pro">Caflisch Script Pro</option>
	        	<option id="gooddog-new" value="gooddog-new">GoodDog New</option>
	        	<option id="blambot-fx-pro" value="blambot-fx-pro">Blambot FX Pro</option>
	        	<option id="sketchnote-text" value="sketchnote-text">Sketchnote Text</option>
	        	<option id="sketchnote-square" value="sketchnote-square">Sketchnote Square</option>
	        	<option id="chantal" value="chantal">Chantal</option>
	        	<option id="voltage" value="voltage">Voltage</option>
				</optgroup>
				
				<optgroup label="Dyslexia Friendly">
	        	<option id="OpenDyslexic" value="OpenDyslexic">OpenDyslexic</option>
				</optgroup>
	            </select>
	        </label>

	        <label class="text__font--para">Weight
	            <select id="font-weight-para" class="input input__dropdown beaker__border">
	                <option value="400">Light</option>
	                <option value="600">Medium</option>
	                <option value="700">Heavy</option>
	                <option value="900">Black</option>
	            </select>
	        </label>

	        <label class="text__font--para">Line Height
	            <select id="font-height-para" class="input input__dropdown beaker__border">
	                <option value="1.5">1.5</option>
	                <option value="2">2</option>
	                <option value="3.5">2.5</option>
	                <option value="3">3</option>
	            </select>
	        </label>
	        </div

		<div class="card">
            <div class="card__title">
                <h3 class="card__title--heading">Default Card</h3>
            </div>

            <div class="card__content">
            	<div class="theme__content">
        	    <span class="badge success">1</span>
			    <span class="badge alert">2</span>
			    <span class="badge danger">3</span>
			    <span class="badge default">A</span>
			    <span class="badge beaker">B</span>
			    </div>

			    <div class="card__content">
		        <span class="label success">Success Label</span>
			    <span class="label alert">Warning/Alert Label</span>
			    <span class="label danger">Danger/Error Label</span>
			    <span class="label default">Default Label</span>
			    <span class="label beaker">Beaker theme label</span>
				</div>

				<div class="card__content">	
            	<button type="button" class="button success small">Success</button>
            	<button type="button" class="button danger small">Danger</button>
            	<button type="button" class="button alert small">Alert</button>
            	<button type="button" class="button default small">Default</button>
            	<button type="button" class="button beaker small">Beaker</button>
            	</div>

         <div class="input-group">
            <input class="input-group-field input beaker__border" type="text">
            <div class="input-group-button">
                <input type="submit" class="beaker input__button" value="Submit">
            </div>
        </div>	

        <button class="accordion">Define exactly what it is that "I keep spaghetti in the pockets of my jeans" means.</button>
        <div class="accordion__panel">
            <div class="accordion__panel--content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqu
                    a. Ut enim ad minim veniam, quis nostrud exercitation ullamco lab
                </p>
            </div>
        </div>

            </div>
        </div>
		
	</section>
</div>



@endsection
