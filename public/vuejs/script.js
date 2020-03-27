//new Vue({
//  el:'#app',
//  data:{
//    errors:[],
//    qt:0,
//    prht:0,
//    tva:0,
//    rdc:0
//  },
//  computed:{
//     totalht:function() {
//       //must parse cuz Vue turns empty value to string
//       return Number(this.qt)*
//         Number(this.prht);
//     }
//  },
//  methods:{
//    checkForm:function(e) {
//      this.errors = [];
//      if(this.total != 100) this.errors.push("Total must be 100!");
//      if(!this.errors.length) return true;
//      e.preventDefault();
//    }
//  }
//})

//var form1 = new Vue({
//    el: '#form1',
//    data: {
//        email: '',
//        nom: '',
//        prenom: '',
//        fonction: '',
//        adresse: '',
//        codep: '',
//        ville: '',
//        pays: '',
//        site: '',
//        tele: '',
//        motcle: '',
//        attemptSubmit: false,
//    },
////    computed: {
////        wrongNumber: function () {
////            return (
////                this.isNumeric(this.number) === false ||
////                this.number < 1 ||
////                this.number > 10
////            )
////        },
////    },
//    methods: {
//        isNumeric: function (n) {
//            return !isNaN(parseFloat(n)) && isFinite(n);
//        },
//
//        validateForm: function (event) {
//            this.attemptSubmit = true;
//            if (!this.email || !this.nom || !this.prenom || !this.fonction || !this.adresse || !this.codep || !this.ville || !this.pays || !this.site || !this.tele || !this.motcle )
//                event.preventDefault();
//        },
//    },
//});
//
//var form2 = new Vue({
//    el: '#form2',
//    data: {
//        email_: '',
//        nom_: '',
//        prenom_: '',
//        fonction_: '',
//        tele_: '',
//        societe: '',
//        motcle_: '',
//        attemptSubmit_: false,
//    },
////    computed: {
////        wrongNumber: function () {
////            return (
////                this.isNumeric(this.number) === false ||
////                this.number < 1 ||
////                this.number > 10
////            )
////        },
////    },
//    methods: {
//        isNumeric: function (n) {
//            return !isNaN(parseFloat(n)) && isFinite(n);
//        },
//
//        validateForm_: function (event) {
//            this.attemptSubmit_ = true;
//            if (!this.email_ || !this.nom_ || !this.prenom_ || !this.fonction_ || this.societe || !this.tele_ || !this.motcle_ )
//                event.preventDefault();
//        },
//    },
//});
//
//var form3 = new Vue({
//    el: '#form3',
//    data: {
//        nom: '',
//        ice: '',
//        tva: '',
//        adresse: '',
//        codep: '',
//        ville: '',
//        pays: '',
//        site: '',
//        tele: '',
//        clients: '',
//        motcle: '',
//        attemptSubmit: false,
//    },
////    computed: {
////        wrongNumber: function () {
////            return (
////                this.isNumeric(this.number) === false ||
////                this.number < 1 ||
////                this.number > 10
////            )
////        },
////    },
//    methods: {
//        isNumeric: function (n) {
//            return !isNaN(parseFloat(n)) && isFinite(n);
//        },
//
//        validateForm: function (event) {
//            this.attemptSubmit = true;
//            if (!this.ice || !this.nom || !this.tva || !this.adresse || !this.codep || !this.ville || !this.pays || !this.site || !this.clients || !this.tele || !this.motcle )
//                event.preventDefault();
//        },
//    },
//});