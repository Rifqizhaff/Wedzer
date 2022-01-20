@extends('layouts.app')

@section('content')
<h1 style="margin-top: 100px; align-items: center; text-align: center; font-family: 'Inter'; font-weight: 500; padding-left: 50px;"> HARGA PAKET</h1>
<div class="container-fluid" style="padding: 50px; padding-left: 150px;">

  <div class="row">
    @forelse ($items as $item)      
        <div class="col-lg-4 mt-4" style="align-items: center; text-align: center;">
          <div class="card" style="width:400px">
            <img class="card-img-top" src="{{ Storage::url($item->image) }}" alt="Card image" style="width: 400px; height: 337px; object-fit: fill;">
            <div class="card-body">
              <h4 class="card-title">{{ $item->name }}</h4>
              <p class="card-text">Rp {{ $item->price }}</p>
              <table class="table">
                <thead>
                  <tr>
                    <th>Benefit</th>
                    <th>Check</th>
                  </tr>
                </thead>
                @if ($item->category == 1)
                  <tbody>
                      <tr>
                        <td>Wedding Planner</td>
                        <td>✓</td>
                      </tr>
                  </tbody>
                
                @elseif ($item->category == 2)
                  <tbody>
                      <tr>
                        <td>Wedding Planner</td>
                        <td>✓</td>
                      </tr>
                      <tr>
                        <td>Venue</td>
                        <td>✓</td>
                      </tr>
                    </tbody>

                @elseif ($item->category == 3)
                  <tbody>
                      <tr>
                        <td>Wedding Planner</td>
                        <td>✓</td>
                      </tr>
                      <tr>
                        <td>Venue</td>
                        <td>✓</td>
                      </tr>
                      <tr>
                        <td>Tenda & Dekorasi</td>
                        <td>✓</td>
                      </tr>
                    </tbody>

                @elseif ($item->category == 4)
                  <tbody>
                      <tr>
                        <td>Wedding Planner</td>
                        <td>✓</td>
                      </tr>
                      <tr>
                        <td>Venue</td>
                        <td>✓</td>
                      </tr>
                      <tr>
                        <td>Tenda & Dekorasi</td>
                        <td>✓</td>
                      </tr>
                      <tr>
                        <td>Catering</td>
                        <td>✓</td>
                      </tr>
                    </tbody>

                @elseif ($item->category == 5)
                  <tbody>
                      <tr>
                        <td>Wedding Planner</td>
                        <td>✓</td>
                      </tr>
                      <tr>
                        <td>Venue</td>
                        <td>✓</td>
                      </tr>
                      <tr>
                        <td>Tenda & Dekorasi</td>
                        <td>✓</td>
                      </tr>
                      <tr>
                        <td>Catering</td>
                        <td>✓</td>
                      </tr>
                      <tr>
                        <td>Make-up Artist</td>
                        <td>✓</td>
                      </tr>
                    </tbody>

                @elseif ($item->category == 6)
                  <tbody>
                      <tr>
                        <td>Wedding Planner</td>
                        <td>✓</td>
                      </tr>
                      <tr>
                        <td>Venue</td>
                        <td>✓</td>
                      </tr>
                      <tr>
                        <td>Tenda & Dekorasi</td>
                        <td>✓</td>
                      </tr>
                      <tr>
                        <td>Catering</td>
                        <td>✓</td>
                      </tr>
                      <tr>
                        <td>Make-up Artist</td>
                        <td>✓</td>
                      </tr>
                      <tr>
                        <td>Busana Pengantin</td>
                        <td>✓</td>
                      </tr>
                    </tbody>

                @elseif ($item->category == 7)
                  <tbody>
                      <tr>
                        <td>Wedding Planner</td>
                        <td>✓</td>
                      </tr>
                      <tr>
                        <td>Venue</td>
                        <td>✓</td>
                      </tr>
                      <tr>
                        <td>Tenda & Dekorasi</td>
                        <td>✓</td>
                      </tr>
                      <tr>
                        <td>Catering</td>
                        <td>✓</td>
                      </tr>
                      <tr>
                        <td>Make-up Artist</td>
                        <td>✓</td>
                      </tr>
                      <tr>
                        <td>Busana Pengantin</td>
                        <td>✓</td>
                      </tr>
                      <tr>
                        <td>Busana Orang tua</td>
                        <td>✓</td>
                      </tr>
                    </tbody>

                @elseif ($item->category == 8)
                  <tbody>
                      <tr>
                        <td>Wedding Planner</td>
                        <td>✓</td>
                      </tr>
                      <tr>
                        <td>Venue</td>
                        <td>✓</td>
                      </tr>
                      <tr>
                        <td>Tenda & Dekorasi</td>
                        <td>✓</td>
                      </tr>
                      <tr>
                        <td>Catering</td>
                        <td>✓</td>
                      </tr>
                      <tr>
                        <td>Make-up Artist</td>
                        <td>✓</td>
                      </tr>
                      <tr>
                        <td>Busana Pengantin</td>
                        <td>✓</td>
                      </tr>
                      <tr>
                        <td>Busana Orang tua</td>
                        <td>✓</td>
                      </tr>
                      <tr>
                        <td>Busana Pagar Ayu & Bagus</td>
                        <td>✓</td>
                      </tr>
                    </tbody>

                @elseif ($item->category == 9)
                  <tbody>
                      <tr>
                        <td>Wedding Planner</td>
                        <td>✓</td>
                      </tr>
                      <tr>
                        <td>Venue</td>
                        <td>✓</td>
                      </tr>
                      <tr>
                        <td>Tenda & Dekorasi</td>
                        <td>✓</td>
                      </tr>
                      <tr>
                        <td>Catering</td>
                        <td>✓</td>
                      </tr>
                      <tr>
                        <td>Make-up Artist</td>
                        <td>✓</td>
                      </tr>
                      <tr>
                        <td>Busana Pengantin</td>
                        <td>✓</td>
                      </tr>
                      <tr>
                        <td>Busana Orang tua</td>
                        <td>✓</td>
                      </tr>
                      <tr>
                        <td>Busana Pagar Ayu & Bagus</td>
                        <td>✓</td>
                      </tr>
                      <tr>
                        <td>Documenter</td>
                        <td>✓</td>
                      </tr>
                    </tbody>

                @elseif ($item->category == 10)
                  <tbody>
                      <tr>
                        <td>Wedding Planner</td>
                        <td>✓</td>
                      </tr>
                      <tr>
                        <td>Venue</td>
                        <td>✓</td>
                      </tr>
                      <tr>
                        <td>Tenda & Dekorasi</td>
                        <td>✓</td>
                      </tr>
                      <tr>
                        <td>Catering</td>
                        <td>✓</td>
                      </tr>
                      <tr>
                        <td>Make-up Artist</td>
                        <td>✓</td>
                      </tr>
                      <tr>
                        <td>Busana Pengantin</td>
                        <td>✓</td>
                      </tr>
                      <tr>
                        <td>Busana Orang tua</td>
                        <td>✓</td>
                      </tr>
                      <tr>
                        <td>Busana Pagar Ayu & Bagus</td>
                        <td>✓</td>
                      </tr>
                      <tr>
                        <td>Documenter</td>
                        <td>✓</td>
                      </tr>
                      <tr>
                        <td>Entertainment</td>
                        <td>✓</td>
                      </tr>
                    </tbody>

                @elseif ($item->category == 11)
                  <tbody>
                      <tr>
                        <td>Wedding Planner</td>
                        <td>✓</td>
                      </tr>
                      <tr>
                        <td>Venue</td>
                        <td>✓</td>
                      </tr>
                      <tr>
                        <td>Tenda & Dekorasi</td>
                        <td>✓</td>
                      </tr>
                      <tr>
                        <td>Catering</td>
                        <td>✓</td>
                      </tr>
                      <tr>
                        <td>Make-up Artist</td>
                        <td>✓</td>
                      </tr>
                      <tr>
                        <td>Busana Pengantin</td>
                        <td>✓</td>
                      </tr>
                      <tr>
                        <td>Busana Orang tua</td>
                        <td>✓</td>
                      </tr>
                      <tr>
                        <td>Busana Pagar Ayu & Bagus</td>
                        <td>✓</td>
                      </tr>
                      <tr>
                        <td>Documenter</td>
                        <td>✓</td>
                      </tr>
                      <tr>
                        <td>Entertainment</td>
                        <td>✓</td>
                      </tr>
                      <tr>
                        <td>Souvenirs</td>
                        <td>✓</td>
                      </tr>
                    </tbody>
                

                @else
                  <p>Category Error!</p>
                @endif
              </table>
              
              <a href="#">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  Choose
                </button>
              </a>
            </div>
          </div>
        </div>
        @empty
        <tr>
          <td colspan="7" class="text-center">
            Data Kosong
          </td>
        </tr>
        
    @endforelse
  </div>
    
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Thank You For Choosing!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        For further information, please contact our CS below!
        <div class="divider"></div>
        <br>
        WA        : 0812345678
        <br>
        Email     : cs@wedzer.com
        <br>
        Instagram : wedzer.co
      </div>
      <div class="modal-footer">
        <a href="mailto: cs@wedzer.com">
          <button type="button" class="btn btn-primary">Order</button>
        </a>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

@endsection