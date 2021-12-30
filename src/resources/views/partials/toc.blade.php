<div class="toc-area transition-opacity ease-linear duration-300" :class="{'opacity-0 z-0': $store.tocFixed}">
  <div id="toc" class="toc-area-inner">
    @php dynamic_sidebar('content_first') @endphp
  </div>
  <div class="toc-area-toggle">
    <button id="toggle-toc" class='btn-toc'>
      <svg xmlns="http://www.w3.org/2000/svg" id="_x31_px" height="512" viewBox="0 0 36 36" width="512">
        <path d="m8.377 4.167c6.917 0 11.667-3.583 15-3.583s10.333 1.916 10.333 17.249-9.417 17.583-13.083 17.583c-17.167.001-24.5-31.249-12.25-31.249z" class="bg"></path>
        <g fill="#a4afc1">
          <path d="m30.856 3.467h2v1h-2z" transform="matrix(.707 -.707 .707 .707 6.525 23.688)"></path>
          <path d="m31.533 7.033h1v2h-1z" transform="matrix(.707 -.707 .707 .707 3.702 25.004)"></path>
          <path d="m27.467 2.967h1v2h-1z" transform="matrix(.707 -.707 .707 .707 5.386 20.938)"></path>
        </g>
        <path d="m11.5 29.5h-4c-.552 0-1-.448-1-1v-15c0-.552.448-1 1-1h4c.552 0 1 .448 1 1v15c0 .552-.448 1-1 1z" fill="#f3f3f1"></path>
        <path d="m17.5 29.5h-4c-.552 0-1-.448-1-1v-21c0-.552.448-1 1-1h4c.552 0 1 .448 1 1v21c0 .552-.448 1-1 1z" fill="#2fdf84"></path>
        <path d="m28.759 28.43-3.864 1.035c-.533.143-1.082-.174-1.225-.707l-5.047-18.835c-.143-.533.174-1.082.707-1.225l3.864-1.035c.533-.143 1.082.174 1.225.707l5.047 18.836c.143.533-.174 1.081-.707 1.224z" fill="#f3f3f1"></path>
        <path d="m8.5 28.5v-15c0-.552.448-1 1-1h-2c-.552 0-1 .448-1 1v15c0 .552.448 1 1 1h2c-.552 0-1-.448-1-1z" fill="#d5dbe1"></path>
        <path d="m14.5 28.5v-21c0-.552.448-1 1-1h-2c-.552 0-1 .448-1 1v21c0 .552.448 1 1 1h2c-.552 0-1-.448-1-1z" fill="#00b871"></path>
        <path d="m25.67 28.759-5.047-18.836c-.143-.533.174-1.082.707-1.225l2.827-.757c-.244-.249-.602-.375-.963-.278l-3.864 1.035c-.533.143-.85.691-.707 1.225l5.047 18.836c.143.534.691.85 1.225.707l1.037-.278c-.117-.119-.216-.257-.262-.429z" fill="#d5dbe1"></path>
        <path d="m11.5 30h-4c-.827 0-1.5-.673-1.5-1.5v-15c0-.827.673-1.5 1.5-1.5h4c.827 0 1.5.673 1.5 1.5v15c0 .827-.673 1.5-1.5 1.5zm-4-17c-.276 0-.5.224-.5.5v15c0 .276.224.5.5.5h4c.276 0 .5-.224.5-.5v-15c0-.276-.224-.5-.5-.5z"></path>
        <path d="m17.5 30h-4c-.827 0-1.5-.673-1.5-1.5v-21c0-.827.673-1.5 1.5-1.5h4c.827 0 1.5.673 1.5 1.5v21c0 .827-.673 1.5-1.5 1.5zm-4-23c-.276 0-.5.224-.5.5v21c0 .276.224.5.5.5h4c.276 0 .5-.224.5-.5v-21c0-.276-.224-.5-.5-.5z"></path>
        <path d="m9.5 26h-3c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h3c.276 0 .5.224.5.5s-.224.5-.5.5z"></path>
        <path d="m15.5 26h-3c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h3c.276 0 .5.224.5.5s-.224.5-.5.5z"></path>
        <path d="m9.5 23c-.276 0-.5-.224-.5-.5v-7c0-.276.224-.5.5-.5s.5.224.5.5v7c0 .276-.224.5-.5.5z"></path>
        <path d="m15.5 23c-.276 0-.5-.224-.5-.5v-13c0-.276.224-.5.5-.5s.5.224.5.5v13c0 .276-.224.5-.5.5z"></path>
        <path d="m24.637 30c-.663 0-1.271-.442-1.45-1.112l-5.047-18.836c-.104-.387-.051-.791.15-1.138.2-.347.523-.595.911-.699l3.864-1.035c.387-.104.792-.051 1.138.149.347.201.596.524.699.911l5.047 18.835c.214.8-.262 1.624-1.061 1.837l-3.864 1.036c-.129.035-.259.052-.387.052zm-1.183-21.871c-.043 0-.087.005-.13.017l-3.864 1.035c-.129.035-.237.117-.304.233-.066.116-.084.25-.05.379l5.047 18.836c.071.266.344.424.613.354l3.863-1.036c.266-.071.425-.346.354-.613l-5.047-18.834c-.035-.129-.117-.237-.233-.304-.077-.045-.162-.067-.249-.067z"></path>
        <path d="m22.893 26.361c-.221 0-.423-.147-.482-.371-.071-.267.087-.541.354-.612l2.898-.776c.267-.072.542.086.612.354.071.267-.087.541-.354.612l-2.898.776c-.044.011-.087.017-.13.017z"></path>
        <path d="m25.015 22.687c-.221 0-.422-.147-.482-.371l-2.977-11.108c-.071-.267.087-.541.354-.612.269-.071.541.086.612.354l2.977 11.108c.071.267-.087.541-.354.612-.044.011-.087.017-.13.017z"></path>
      </svg>
    </button>
  </div>
</div>