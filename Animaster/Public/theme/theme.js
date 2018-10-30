(function($){
    $(document).ready(function(){
        //Fullscreen Button
        //-----------------------------------------------
        if ($('[data-action="fullscreen"]')[0]) {
            var fs = $("[data-action='fullscreen']");
            fs.on('click', function(e) {
                e.preventDefault();

                //Launch
                function launchIntoFullscreen(element) {

                    if(element.requestFullscreen) {
                        element.requestFullscreen();
                    } else if(element.mozRequestFullScreen) {
                        element.mozRequestFullScreen();
                    } else if(element.webkitRequestFullscreen) {
                        element.webkitRequestFullscreen();
                    } else if(element.msRequestFullscreen) {
                        element.msRequestFullscreen();
                    }
                }

                //Exit
                function exitFullscreen() {

                    if(document.exitFullscreen) {
                        document.exitFullscreen();
                    } else if(document.mozCancelFullScreen) {
                        document.mozCancelFullScreen();
                    } else if(document.webkitExitFullscreen) {
                        document.webkitExitFullscreen();
                    }
                }
                notify('FullScreen Toggled!','inverse','top','left', 1000, false);
                launchIntoFullscreen(document.documentElement);
                fs.closest('.dropdown').removeClass('open');
            });
        }

        //Clear Button
        //-----------------------------------------------
        if ($('[data-action="clear-localstorage"]')[0]) {
            var cls = $("[data-action='clear-localstorage']");
            cls.on('click', function(e) {
                e.preventDefault();
                console.log('hey');

                swal({
                  title: 'Are you sure?',
                  text: "You won't be able to revert this!",
                  type: 'warning',
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                  if (result.value) {
                    localStorage.clear();
                    swal(
                      'Deleted!',
                      'Local storage removed!.',
                      'success'
                    )
                  }
                })
            });
        }

        //Waves Plugin
        //-----------------------------------------------
        var config = {
            // How long Waves effect duration
            // when it's clicked (in milliseconds)
            duration: 1000,

            // Delay showing Waves effect on touch
            // and hide the effect if user scrolls
            // (0 to disable delay) (in milliseconds)
            delay: 200,
            wait: 1000, //ms
        };
        Waves.attach('.btn:not(.btn-icon):not(.btn-float)');
        Waves.attach('.btn-icon, .btn-float', ['waves-circle', 'waves-float']);
        Waves.init(config);
        console.log('Ready!');
    });

    // Notify Plugin
    //-----------------------------------------------
      //BootstrapNotify('Configure this in template.js','default', 20,'bottom','left', 1000, true);
      function notify(inMsg, inType,pl_from ,pl_align, time_Delay, allow_Close) {
          $.notify({
              // options
              icon: null,
              title: null,
              message: inMsg,
              url: null,
              target: '_blank'
          },{
              // settings
              element: 'body',
              position: null,
              type: inType,
              allow_dismiss: allow_Close,
              newest_on_top: false,
              showProgressbar: false,
              placement: {
                      from: pl_from,
                      align: pl_align
              },
              offset: {
                  x: 15, // Keep this as default
                  y: 15  // Unless there'll be alignment issues as this value is targeted in CSS
              },
              spacing: 10,
              z_index: 1031,
              delay: time_Delay,
              timer: 1000,
              url_target: '_blank',
              mouse_over: null,
              animate: {
                      enter: 'animated fadeInDown',
                      exit: 'animated fadeOutUp'
              },
              onShow: null,
              onShown: null,
              onClose: null,
              onClosed: null,
              icon_type: 'class',
              template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
                      '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
                      '<span data-notify="icon"></span> ' +
                      '<span data-notify="title">{1}</span> ' +
                      '<span data-notify="message">{2}</span>' +
                      '<div class="progress" data-notify="progressbar">' +
                              '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
                      '</div>' +
                      '<a href="{3}" target="{4}" data-notify="url"></a>' +
              '</div>'
          });
          return false;
      }
      //alert msg function
  		anotify = function altify(msg, tipe) {
  			$.notify({
  					// options
  					message: msg
  			},{
  					// settings
  					type: tipe,
  					delay: 4000,
  					offset : {
  							y: 15,
  							x: 15
  					},
  					placement: {
  						from: "bottom",
  						align: "right"
  					}
  			});
  		}

      // Disable autocomplete in all forms
      //-----------------------------------------------
      $( document ).on( 'focus', ':input', function(){
          $( this ).attr( 'autocomplete', 'off' );
      });

      //getfocus function for no autofill
      //-----------------------------------------------
      focusMethod = function getFocus(id) {
        document.getElementById(id).focus();
      }
      $('[data-toggle="tooltip"]').tooltip();

      //?
      //-----------------------------------------------
      
})(this.jQuery);
