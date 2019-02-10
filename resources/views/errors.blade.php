      @if ($errors->any())

      <div class="notification error">
        
        @foreach ($errors->all() as $error) 

        <p>{{ $error }}</p>

        @endforeach

        @endif