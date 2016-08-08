<script>
function Hill(hillEl, overlayEl) {
          this.hill = $(hillEl);
          this.overlay = $(overlayEl);
          this.wWidth = $(window).width();
          this.wHeight = $(window).height();
          this.dHeight = $(document).height();
        }

        Hill.prototype = {
          init: function(){
            this.bindHandlers();
          },

          bindHandlers: function(){
            var self = this;

            $('.hill-link').on('click', function(){
              self.showHill();
            });

            $(window)
              .resize(function() {
                self.setWinSize($(this));
                self.setHillPosition();
             })
               .scroll(function() {
                self.setWinSize($(this));
                self.setHillPosition();
             });

            $('.close-button').click(function(){
              self.hideHill();
            });
          },

          showHill: function(){
            this.overlay.fadeIn();
            this.hill.fadeIn();
            this.setHillPosition();
          },

          hideHill: function(){
            this.overlay.fadeOut();
            this.hill.fadeOut();
          },

          setHillPosition: function(){
            var hillHeight = this.hill.outerHeight(),
                hillWidth = this.hill.outerWidth(),
                scrollTop = $(window).scrollTop();

            if(this.wHeight < hillHeight){
              this.hill.css('top', scrollTop);
            } else {
              this.hill.css('top', this.centerVertically(this.wHeight,hillHeight,scrollTop));
            }

            if(this.wWidth < hillWidth){
              this.hill.css('left', 0);
            } else {
              this.hill.css('left', this.centerHorizontally(this.wWidth,hillWidth));
            }
          },

          centerVertically: function(w, m, scroll){
            return ((w - m)/2 + scroll);
          },

          centerHorizontally: function(w, m){
            return (w - m)/2;
          },

          setWinSize:function(win){
            this.wWidth = win.width();
            this.wHeight = win.height();
          }
        }


      $(document).ready(function(){
        var hill = new Hill($('.hill-window'), $('.hill-overlay'));
        hill.init();
      });
</script>