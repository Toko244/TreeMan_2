
<div class="button-container on">
    {{-- <div class="button"></div> --}}
    <div class="text">
        {{ Form::label(trans('admin.'.$key), null, ['class' => 'control-label']) }}
        <br>
        {{ Form::hidden($key, '0') }}
        {{ Form::checkbox($key, 1,  null, [
            'data-plugin' => 'switchery',
            'data-color'=>'#3bafda',
            'id' =>  $key
        ]) }}
      <span class="on">Ongoing</span>
      <span class="off">Completed</span>
    </div>
  </div>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Lato:wght@700&family=Noto+Sans:wght@300;400;600&display=swap');

.button-container {
  display: inline-flex;
  align-items: center;
  cursor: pointer;
  margin: 15px 0;
}
.button-container .button {
    position: relative;
    border: 3px solid #9b9c9b;
    height: 33px;
    width: 55px;
    margin-right: 5px;
    border-radius: 40px;
}
.button-container.on .button {
  border-color: rgb(59, 175, 218);
}
.button-container .button:before {
    content: '';
    position: absolute;
    height: 26px;
    width: 27px;
    background-color: #9b9c9b;
    border-radius: 38px;
    top: 50%;
    transform: translateY(-50%);
    left: 1px;
    transition: left .3s linear;
}
.button-container.on .button:before {
  background-color: rgb(59, 175, 218);
  left: 21px
}

.button-container .text {
  font-family: 'Lato', sans-serif;
  font-weight: 900;
  font-size: 16px;
  color: #9b9c9b;
}
.button-container.on .text {
  color: rgb(59, 175, 218);
}
.button-container:not(.on) .text .on {
  display: none;
}
.button-container.on .text .off {
  display: none;
}
  </style>
<script>
    const btnElmCont = document.querySelector('.button-container');

btnElmCont.addEventListener('click', function () {
  btnElmCont.classList.toggle('on');
});
</script>
