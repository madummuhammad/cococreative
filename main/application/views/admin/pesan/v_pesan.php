<style>
	.chat-content, .chat-content .sender, .user-detail h6{
		font-size: 14px;
	}
	.image img{
		height: 40px;
		width: 40px;
	}
	.user-detail h6{
		display: inline-block;
	}
	.user-detail .active{
		color: #32B92D;
		font-size: 12px;
	}
	.user-detail .active{
		color: #32B92D;
		font-size: 12px;
	}
	.options i{
		color: #a1a1a1;
		font-size: 19px;
		cursor: pointer;
	}
	.chat-content ul{
		height: 340px;
		overflow-x: scroll;
		overflow-x: hidden;
	}
	.scroll{
		height: 470px;
		overflow-x: scroll;
		overflow-x: hidden;
	}
	.chat-content ul li{
		list-style: none;
		background: #F5F5F5;
	}
	.chat-content .msg-box{
		background: #e1e1e1;
	}
	.chat-content .msg-box .send-btn{
		background: #39AEA9;
	}
	.chat-content .time{
		font-size: 10px;
		color: #a1a1a1;
	}
</style>
</style>
<div id="layoutSidenav_content">
	<main>
		<div class="container-fluid">
			<div class="card mb-4 mt-2">
				<div class="row">
					<div class="col-sm-3 border-lg border bg-dark ml-3 scroll">
						
						<div class="pengirimpesan">
							
						</div>
					</div>
					<div class="col">
						<div class="col-md-12  chat-content p-0 bg-white border border-top-0" id="">
							<!--        							<ul class="pl-3 pr-3 pt-1 mb-1" id="scroll">
								<h1 class="display-3 text-center">Tidak ada pesan dipilih</h1>
							</ul> -->
							<div class="isi">
							</div>
							<p class="text-center mb-2 sender font-italic">
								<div class="msg-box p-2">
									<div class="row">
										<div class="col-md-9">
											<input type="text" name="pesan" autocomplete="off" class="form-control isipesan" placeholder="message ...">
											<input type="text" class="idpengirim" value="<?php echo $this->uri->segment(3) ?>" hidden>
										</div>
										<div class="col-md-3 pl-0">
											<button class="btn btn-success send">Send</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</main>