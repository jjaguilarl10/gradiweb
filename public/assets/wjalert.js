function WjAlert(m,t){
     var time_delay = 2500;
          if(t=="i"){
               $.notify({ icon: 'ti-info',   message: m, allow_dismiss: false, showProgressbar: true
               },{
                  type: 'information', delay: time_delay , timer: 2500,
                  allow_dismiss: true, newest_on_top: false,  showProgressbar: false,
                  placement: { from: 'top', align: 'center' },
                  offset: { x: 30, y: 70 }
               }); }
     
          if(t=="s"){
               $.notify({
                  icon: 'ti-check', message: m,  allow_dismiss: false, showProgressbar: true
               },{
             type: 'success', delay: time_delay, timer: 2500, allow_dismiss: true,
             newest_on_top: false, showProgressbar: false,
             placement: { from: 'top', align: 'right' },
             offset: { x: 30,  y: 70 }
               }); }
     
          /*--- Error Mensaje ---*/
          if(t=="e"){
            $.notify({
                 icon: 'pli-close', message: m,  allow_dismiss: false, showProgressbar: true
            },{
             type: 'error', delay: time_delay,  timer: 2500, allow_dismiss: true,
             newest_on_top: false, showProgressbar: false,
             placement: { from: 'top', align: 'right' },
             offset: { x: 30, y: 70 }
            }); }
     
          if(t=="w"){
            $.notify({
                 icon: 'ti-flag', message: m, allow_dismiss: false, showProgressbar: true
            },{
             type: 'warning', delay: time_delay, timer: 2500, allow_dismiss: true, newest_on_top: false,
             showProgressbar: false,
             placement: { from: 'top', align: 'right' },
             offset: { x: 30, y: 70 }
            }); }
     }