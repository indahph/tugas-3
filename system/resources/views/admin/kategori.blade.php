@extends('template.base')

@section('content')

<div class="card my-3">
	<div class="container">
		<h4>Halaman Produk</h4>
	</div>
  <div class="card-body">
    <div class="container">
    	<div class="col-12">
    		<div class="row">

<!-- Daftar kategori ( Bisa di hapus dari sini) -->
			  <div class="col-sm-6">
			    <div class="card">
			      <div class="card-body">
			        <h5 class="card-title text-primary">Honda</h5>
			        <p class="card-text text-muted"> disini kami menyediakan banyak model motor merk Honda dengan berbagai macam spesifikasi t, Selain itu kami juga menyediakan motor yang paling recomended merk Honda</p>
			        <a href="{{url('admin/produk')}}" class="btn btn-primary">Lebih Banyak Barang</a>
			      </div>
			    </div>
			  </div>
<!-- sampai sini -->

<!-- Daftar kategori ( Bisa di hapus dari sini) -->
			  <div class="col-sm-6">
			    <div class="card">
			      <div class="card-body">
			        <h5 class="card-title text-primary">Suzuki </h5>
			        <p class="card-text text-muted">Selain Honda kita juga menyediakan berbagai macam jenis motor merk suzuki dengan motor yang sangat berkualitas dan terjangkau dikalangan masyarakat, kami juga menyediakan motor merk suzuki ini untuk bertrevelling. </p>
			        <a href="{{url('admin/produk')}}" class="btn btn-primary">Lebih Banyak Barang</a>
			      </div>
			    </div>
			  </div>
<!-- sampai sini -->

<!-- Daftar kategori ( Bisa di hapus dari sini) -->
			  <div class="col-sm-6">
			    <div class="card">
			      <div class="card-body">
			        <h5 class="card-title text-primary">Yahama</h5>
			        <p class="card-text text-muted">Selain 2 Produk tadi kita juga menyediakan motor merk Yahama,motor Yamaha  ini juga tidak kalah bagusnya dibandingkan motor yang lain.</p>
			        <a href="{{url('admin/produk')}}" class="btn btn-primary">Lebih Banyak Barang</a>
			      </div>
			    </div>
			  </div>
<!-- sampai sini -->

<!-- Daftar kategori ( Bisa di hapus dari sini) -->
			  <div class="col-sm-6">
			    <div class="card">
			      <div class="card-body">
			        <h5 class="card-title text-primary">Kawasaki</h5>
			        <p class="card-text text-muted">Motor merk Kawasaki juga tersedia loh ditoko online kita buruan di cek.</p>
			        <a href="{{url('admin/produk')}}" class="btn btn-primary">Lebih Banyak Barang</a>
			      </div>
			    </div>
			  </div>
<!-- sampai sini -->

			</div>
    	</div>
    </div>
  </div>
</div>

@endsection