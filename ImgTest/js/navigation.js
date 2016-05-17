var adminurl = "http://localhost:1337/";
var adminlogin = {
  "username": "admin@admin.com",
  "password": "admin123"
};
var navigationservice = angular.module('navigationservice', [])

.factory('NavigationService', function($http) {
  var navigation = [{
      name: "Dashboard",
      classis: "active",
      link: "#/home",
      subnav: []
    }, 
				{name: 'Slider',active: '',link: '#/slider',subnav: []},//Add New Left

  ];

  return {
    makeactive: function(menuname) {
      for (var i = 0; i < navigation.length; i++) {
        if (navigation[i].name == menuname) {
          navigation[i].classis = "active";
        } else {
          navigation[i].classis = "";
        }
      }
      return menuname;
    },
    getnav: function() {
      return navigation;
    },
    adminLogin: function(data, callback) {
      $http({
        url: adminurl + "user/adminlogin",
        method: "POST",
        data: {
          "email": data.email,
          "password": data.password
        }
      }).success(callback);
    },
    //    countUser: function(callback) {
    //      $http.get(adminurl + "user/countusers").success(callback);
    //    },
    setUser: function(data) {
      $.jStorage.set("user", data);
    },
    getUser: function() {
      $.jStorage.get("user");
    }, getOneSlider: function (id, callback) {$http({url: adminurl + 'slider/findone',method: 'POST',data: {'_id':id}}).success(callback);},findLimitedSlider: function(slider, callback) {$http({url: adminurl + 'slider/findlimited',method: 'POST',data: {'search': slider.search,'pagesize': parseInt(slider.limit),'pagenumber': parseInt(slider.page)}}).success(callback);},deleteSlider: function (callback) {$http({url: adminurl + 'slider/delete',method: 'POST',data: {'_id': $.jStorage.get('deleteslider')}}).success(callback);},saveSlider: function (data, callback) {$http({url: adminurl + 'slider/save',method: 'POST',data: data}).success(callback);},//Add New Service

  }
})
