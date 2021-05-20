const msgButtons = document.querySelectorAll('.btn-message');
  let messageCount = 0;
  function createMessage(type,icon,loading,duration){
    //alert('entro a la funcion'+type+' -- '+icon+' --  '+loading+' -- '+duration);
    //console.log('entro a a funcion de createMessage');
    let message = ``;
    //console.log(icon);
    const messageShowcase = $('.message-wrapper');
    if(!loading){
      message = `
        <div class="atbd-pop-message message-${type} message-${messageCount}">
            <span class="atbd-pop-message__icon">
                <i class="la la-${icon}"></i>
            </span>
            <span class="atbd-pop-message__text">
                <p>Operación realizada con éxito</p>
            </span>
        </div>
      `;
    }else{
      message = `
        <div class="atbd-pop-message message-${type} message-${messageCount}">
            <span class="atbd-pop-message__icon">
                <i class="la la-loader"></i>
            </span>
            <span class="atbd-pop-message__text"><p>Esto es un  ${type} Mensaje</p></span>
        </div>
    `;
    }
    if(duration){
        message = `
        <div class="atbd-pop-message message-${type} message-${messageCount}">
            <span class="atbd-pop-message__icon">
                <i class="la la-${icon}"></i>
            </span>
            <span class="atbd-pop-message__text">
                <p>
                    Este es un mensaje de proceso realizado con éxito y desaparecerá en 10 segundos
                </p>
            </span>
        </div>
    `;
    }

    messageShowcase.append(message);
    messageCount++;
  }
  function showMessage(e){
    e.preventDefault();
    let duration = (optionValue, defaultValue) =>
      typeof optionValue === "undefined" ? defaultValue : optionValue;

    dureation = this.dataset.messageduration;

    let messageType = this.dataset.messagetype;
    let messageIcon = this.dataset.messageicon;
    let messageLoading = this.dataset.messageLoading;
    createMessage(messageType,messageIcon,messageLoading,this.dataset.duration);
    feather.replace();
    let thismessage = messageCount - 1;

    setTimeout(function(){
      $(document).find(".message-"+thismessage).remove();
    },duration(this.dataset.duration,3000));

  }

  if(msgButtons){
    msgButtons.forEach(messageButton => messageButton.addEventListener('click',showMessage));
  }
