$(function(){

    var renderCompanyList = function(poses) {
      $('.holder').empty();
      var template = $('#company-media-object').html();
      var companyTemplate = Handlebars.compile(template);
      $('.holder').append(companyTemplate(poses));
  }

  renderCompanyList(poses);



  // var renderpopup = function(yogapose){
  // 	$('#content-logged-details').empty();
  //     var template = $('#company-media-object').html();
  //     var companyTemplate = Handlebars.compile(template);
  //     $('#content-logged-details').append(companyTemplate(yogapose));


  // }

  //renderpopup(poses);

  
});