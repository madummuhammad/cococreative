	$("#tambahpilihan").on('click',function(){
		var jmlpilihanvariasi=$(".pilihan_variasi").length;
		$("#label_tambah_pilihan").before('<label for="staticEmail" class="col-sm-2 col-form-label" id="labelinputpilihanvariasi'+jmlpilihanvariasi+'"></label><div class="col-sm-10" id="inputpilihanvariasi'+jmlpilihanvariasi+'"><div class="input-group mb-3"><input type="text" name="pilihan_variasi[]" class="form-control pilihan_variasi show"  placeholder="Masukkan Pilihan Variasi, contoh: Merah, dll" aria-label="Recipients username" aria-describedby="basic-addon2" autocomplete="off"><div class="input-group-append"><button class="btn btn-outline-secondary pilihan_variasi_hapus" id="pilihan_variasi_hapus'+jmlpilihanvariasi+'" type="button"><i class="far fa-trash-alt"></i></button></div><div class="invalid-feedback">Pilihan Variasi Harus Di Isi</div></div>');

		$("#pilihan_variasi_hapus"+jmlpilihanvariasi).on('click',function(){
			$("#labelinputpilihanvariasi"+jmlpilihanvariasi).hide();
			$("#inputpilihanvariasi"+jmlpilihanvariasi+" input").removeClass("show");
			$("#inputpilihanvariasi"+jmlpilihanvariasi+" input").addClass("hide");
			$("#inputpilihanvariasi"+jmlpilihanvariasi).hide();
			$("#tr_pilihan"+jmlpilihanvariasi).hide();
			$("#tr_pilihan"+jmlpilihanvariasi+" input").removeAttr("name");

		});



		$("#tbody").append('<tr id="tr_pilihan'+jmlpilihanvariasi+'"><td id="td_pilihan'+jmlpilihanvariasi+'">Pilihan</td><td><div class="input-group mb-3"><div class="input-group-prepend"><span class="input-group-text" id="basic-addon1">Rp.</span></div><input type="text" name="harga_variasi[]" class="harga form-control border-right-0 border-left-0 border-top-0" placeholder="Masukan Harga" aria-label="Username" aria-describedby="basic-addon1" autocomplete=""><div class="invalid-feedback">Harga Variasi Harus Di Isi</div> </div></td><td><textarea name="keterangan_variasi_produk[]" id="" cols="30" rows="5" class="form-control"></textarea></td></td><td><input type="file" class="form-control-file" name="gambar_variasi[]""></td></tr>');

		setInterval(function(){
			var jmlnama_pilihan_variasi=$("#inputpilihanvariasi"+jmlpilihanvariasi+" input").val().length;
			if (jmlnama_pilihan_variasi==0) {
				$("#inputpilihanvariasi"+jmlpilihanvariasi+" input").removeClass("diisi");
				$("#inputpilihanvariasi"+jmlpilihanvariasi+" input").addClass("belumdiisi");
				$("#inputpilihanvariasi"+jmlpilihanvariasi+" .invalid-feedback").show();
			} else {
				$("#inputpilihanvariasi"+jmlpilihanvariasi+" input").removeClass("belumdiisi");
				$("#inputpilihanvariasi"+jmlpilihanvariasi+" input").addClass("diisi");
				$("#inputpilihanvariasi"+jmlpilihanvariasi+" .invalid-feedback").hide(); 
			}

		},2);


		$("#inputpilihanvariasi"+jmlpilihanvariasi).on('keypress',function(){
			setInterval(function(){
				var nama_pilihan_variasi=$("#inputpilihanvariasi"+jmlpilihanvariasi+" input").val();
				if (nama_pilihan_variasi=='') {
					$("#td_pilihan"+jmlpilihanvariasi).html('Pilihan');
				} else {
					$("#td_pilihan"+jmlpilihanvariasi).html(nama_pilihan_variasi);
				}

			},2);
		});
	});



	$("#nama_variasi").on('keypress',function(){
		setInterval(function(){
			var nama_variasi=$("#nama_variasi").val();
			if (nama_variasi=='') {
				$("#th_nama_variasi").html('Nama Variasi');
			} else {
				$("#th_nama_variasi").html(nama_variasi);
			}
		},2);
	});

	$("#inputpilihanvariasi0").on('keypress',function(){
		setInterval(function(){
			var nama_pilihan_variasi=$("#inputpilihanvariasi0 input").val();
			if (nama_pilihan_variasi=='') {
				$("#td_pilihan0").html('Pilihan');
			} else {
				$("#td_pilihan0").html(nama_pilihan_variasi);
			}
		},2);
	});

	$("#tombol_harga").on('click',function(){
		var harga=$("#input_harga_semua").val();
		$(".harga").attr("value",harga);
	});

		setInterval(function(){
			var jmlpilihanvariasidua=$(".show").length;
			var nama_produk=$("#nama_produk input").val().length;
			var keterangan_jenis_produk=$("#keterangan_jenis_produk textarea").val().length;
			var foto_utama=$("#foto_utama input").val().length;
			var nama_produk=$("#nama_produk input").val().length;
			var nama_variasi=$("#nama_variasi input").val().length;
			var variasi=$("#inputpilihanvariasi0 input").val().length;
			var diisi=$(".show.diisi").length;
			var show=$(".show").length;

			// if (diisi==show) {
			// 	$("#simpan").attr('type','submit');
			// }

			if (nama_produk==0 ) {
				$("#nama_produk .invalid-feedback").show();
				
			} else {
				$("#nama_produk .invalid-feedback").hide();
				
			}

			if (keterangan_jenis_produk==0){
				$("#keterangan_jenis_produk .invalid-feedback").show();
			} else {
				$("#keterangan_jenis_produk .invalid-feedback").hide();
			}

			if(foto_utama==0) {
				$("#foto_utama .invalid-feedback").show();
			} else {
				$("#foto_utama .invalid-feedback").hide();
			}

			if (nama_variasi==0) {
				$("#nama_variasi .invalid-feedback").show();
			} else {
				$("#nama_variasi .invalid-feedback").hide();
			}

			if (variasi==0) {
				$("#inputpilihanvariasi0 input").removeClass("diisi");
				$("#inputpilihanvariasi0 input").addClass("belumdiisi");
				$("#inputpilihanvariasi0 .invalid-feedback").show();
			} else {
				$("#inputpilihanvariasi0 input").addClass("diisi");
				$("#inputpilihanvariasi0 input").removeClass("belumdiisi");
				$("#inputpilihanvariasi0 .invalid-feedback").hide();
			}

			if (diisi==show && keterangan_jenis_produk!=0 && foto_utama !=0 && nama_variasi !=0 && variasi !=0) {
				$("#simpan").attr('type','submit');
			} else {
				$("#simpan").attr('type','button');
			}

		}),2;



// Edit JS
$("#tambah_edit_variasi").on('click',function(){
	var jmleditvariasi=$(".edit_pilihan_variasi").length;
	$("#tbody_edit").append('<tr id="tr_edit_pilihan'+jmleditvariasi+'" class="edit_pilihan_variasi"><td id="td_pilihan"><input type="text" class="form-control" name="edit_pilihan_variasi[]"></td><td><div class="input-group mb-3"><div class="input-group-prepend"><span class="input-group-text border-0" id="basic-addon1">Rp.</span></div><input type="text" class="harga form-control border-right-0 border-left-0 border-top-0" name="edit_harga_variasi[]" placeholder="Masukan Harga" aria-label="Username" aria-describedby="basic-addon1" autocomplete="off" value=""><div class="invalid-feedback">Harga Variasi Harus Di Isi</div> </div></td><td><textarea name="edit_keterangan_variasi_produk[]" id="" cols="30" rows="5" class="form-control"></textarea></td><td><input type="file" class="form-control-file" name="edit_gambar_variasi[]" autocomplete="off"></td><td><button class="btn btn-outline-secondary pilihan_variasi_hapus" id="edit_variasi_hapus'+jmleditvariasi+'" type="button"><i class="far fa-trash-alt"></i></button></td></tr>');
	$("#edit_variasi_hapus"+jmleditvariasi).on('click',function(){
		$("#tr_edit_pilihan"+jmleditvariasi).hide();
		$("#tr_edit_pilihan"+jmleditvariasi+' input').removeAttr('name');
		$("#tr_edit_pilihan"+jmleditvariasi+' textarea').removeAttr('name');
	});
});