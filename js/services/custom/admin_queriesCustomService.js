/* 
 * ADD HERE YOUR CUSTOMIZAZION, 
 * THESE WILL OVERRIDE DEFAULT SERVICES 
 * THIS FILE WILL BE NEVER OVERWRITTEN BY SKAFFOLDER
 * 
 */

admin_queriesService = app.factory('admin_queriesServiceCustom', ['$rootScope', function($rootScope){
  return {
	  //WRITE HERE YOUR CUSTOM SERVICE
	};
  }]);