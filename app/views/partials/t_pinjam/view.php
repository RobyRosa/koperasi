    <template id="t_pinjamView">
        <section class="page-component">
            <div v-if="showheader" class="bg-light p-3 mb-3">
                <div class="container">
                    <div class="row ">
                        <div  class="col-12 comp-grid" :class="setGridSize">
                            <h3 class="record-title">View  T Pinjam</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div  class="pb-2 mb-3 border-bottom">
                <div class="container">
                    <div class="row ">
                        <div  class="col-md-12 comp-grid" :class="setGridSize">
                            <div  class=" animated fadeIn">
                                <div v-show="!loading">
                                    <div ref="datatable" id="datatable">
                                        <table class="table table-hover table-borderless table-striped">
                                            <!-- Table Body Start -->
                                            <tbody>
                                                <tr>
                                                    <th class="title"> Kode Pinjam :</th>
                                                    <td class="value"> {{ data.kode_pinjam }} </td>
                                                </tr>
                                                <tr>
                                                    <th class="title"> Kode Anggota :</th>
                                                    <td class="value"> {{ data.kode_anggota }} </td>
                                                </tr>
                                                <tr>
                                                    <th class="title"> Kode Jenis Pinjam :</th>
                                                    <td class="value"> {{ data.kode_jenis_pinjam }} </td>
                                                </tr>
                                                <tr>
                                                    <th class="title"> Besar Pinjam :</th>
                                                    <td class="value"> {{ data.besar_pinjam }} </td>
                                                </tr>
                                                <tr>
                                                    <th class="title"> Besar Angsuran :</th>
                                                    <td class="value"> {{ data.besar_angsuran }} </td>
                                                </tr>
                                                <tr>
                                                    <th class="title"> Lama Angsuran :</th>
                                                    <td class="value"> {{ data.lama_angsuran }} </td>
                                                </tr>
                                                <tr>
                                                    <th class="title"> Sisa Angsuran :</th>
                                                    <td class="value"> {{ data.sisa_angsuran }} </td>
                                                </tr>
                                                <tr>
                                                    <th class="title"> Sisa Pinjaman :</th>
                                                    <td class="value"> {{ data.sisa_pinjaman }} </td>
                                                </tr>
                                                <tr>
                                                    <th class="title"> U Entry :</th>
                                                    <td class="value"> {{ data.u_entry }} </td>
                                                </tr>
                                                <tr>
                                                    <th class="title"> Tgl Entri :</th>
                                                    <td class="value"> {{ data.tgl_entri }} </td>
                                                </tr>
                                                <tr>
                                                    <th class="title"> Tgl Tempo :</th>
                                                    <td class="value"> {{ data.tgl_tempo }} </td>
                                                </tr>
                                                <tr>
                                                    <th class="title"> Status :</th>
                                                    <td class="value"> {{ data.status }} </td>
                                                </tr>
                                            </tbody>
                                            <!-- Table Body End -->
                                        </table>
                                    </div>
                                    <div v-if="editbutton || deletebutton || exportbutton" class="py-3">
                                        <span >
                                            <router-link class="btn btn-sm btn-info has-tooltip" v-if="editbutton"  :to="'/t_pinjam/edit/'  + data.kode_pinjam">
                                            <i class="fa fa-edit"></i> 
                                            </router-link>
                                            <button @click="deleteRecord" class="btn btn-sm btn-danger" v-if="deletebutton" :to="'/t_pinjam/delete/' + data.kode_pinjam">
                                            <i class="fa fa-times"></i> </button>
                                        </span>
                                        <button @click="exportRecord" class="btn btn-sm btn-primary" v-if="exportbutton">
                                            <i class="fa fa-save"></i> 
                                        </button>
                                    </div>
                                </div>
                                <div v-show="loading" class="load-indicator static-center">
                                    <span class="animator">
                                        <clip-loader :loading="loading" color="gray" size="20px">
                                        </clip-loader>
                                    </span>
                                    <h4 style="color:gray" class="loading-text"></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </template>
    <script>
	var T_PinjamViewComponent = Vue.component('t_pinjamView', {
		template : '#t_pinjamView',
		mixins: [ViewPageMixin],
		props: {
			pagename: {
				type : String,
				default : 't_pinjam',
			},
			routename : {
				type : String,
				default : 't_pinjamview',
			},
			apipath: {
				type : String,
				default : 't_pinjam/view',
			},
		},
		data: function() {
			return {
				data : {
					default :{
						kode_pinjam: '',kode_anggota: '',kode_jenis_pinjam: '',besar_pinjam: '',besar_angsuran: '',lama_angsuran: '',sisa_angsuran: '',sisa_pinjaman: '',u_entry: '',tgl_entri: '',tgl_tempo: '',status: '',
					},
				},
			}
		},
		computed: {
			pageTitle: function(){
				return 'View  T Pinjam';
			},
		},
		methods :{
			resetData : function(){
				this.data = {
					kode_pinjam: '',kode_anggota: '',kode_jenis_pinjam: '',besar_pinjam: '',besar_angsuran: '',lama_angsuran: '',sisa_angsuran: '',sisa_pinjaman: '',u_entry: '',tgl_entri: '',tgl_tempo: '',status: '',
				}
			},
		},
	});
	</script>
