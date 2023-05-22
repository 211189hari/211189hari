!function(){"use strict";const t=t=>{const e=document.querySelectorAll("lottie-player");if(0==e.length)return void t?.();const o=e.length,i=Array(e.length).fill(0),n=()=>i.reduce(((t,e)=>t+e),0);let s=!0;const r=["load","loop","ready","complete","loop","rendered","error"];e.forEach(((e,a)=>{let c=150;const l=()=>{e?.shadowRoot?.querySelector("svg")||e?.shadowRoot?.querySelector(".error")?(i[a]=1,n()>=o&&s&&(s=!1,t?.())):(c+=c*(.5+Math.random()),setTimeout(l,c))},h=setTimeout(l,c);r.forEach((r=>{const c=()=>{i[a]=1,e.removeEventListener(r,c),clearTimeout(h),n()>=o&&s&&(s=!1,t?.())};e.addEventListener(r,c)}))}))};window.debugSticky=!1;const e=(t,e)=>e.some((e=>t.classList.contains(e))),o="none",i="bottom",n="constrain-top",s="constrain-bottom";let r=0;class a{constructor(t,e,i){this.index=r++,this.config=e,this.selector=t,this.containerSelector=i,this.orderInPage=-1,this.isActive=!1,this.isDormant=!0,this.positionStatus=o,this.status="inactive",this.triggerLimit="bottom"===e?.position?window.innerHeight-this.offset:0,this.elem="string"==typeof t?document.querySelector(t):t,this.container="string"==typeof i?document.querySelector(i):i,this.scrollTop=window.pageYOffset||document.documentElement.scrollTop,this.scrollLeft=window.pageXOffset||document.documentElement.scrollLeft;const{top:n,left:s,height:a,width:c}=this.elem.getBoundingClientRect();this.width=c,this.height=a,this.elemTopPositionInPage=n+this.scrollTop,this.elemLeftPositionInPage=s+this.scrollLeft,this.elemBottomPositionInPage=this.elemTopPositionInPage+a,this.containerHeight=this.container?.getBoundingClientRect()?.height||0,this.containerTopPosition=this.container?this.container?.getBoundingClientRect()?.top+this.scrollTop:0,this.containerBottomPosition=this.containerTopPosition+(this.container?.getBoundingClientRect()?.height||0),this.offsetY=this.offset,this.activationOffset=this.offset+20,this.placeholder=document.createElement("div"),this.placeholder.style.height=a+"px",this.placeholder.style.width=c+"px",this.elem.classList.remove("o-sticky-float"),this.stylingNodeName=`o-sticky-node-${this.index}`,this.stylingNode=document.createElement("style"),document.head.appendChild(this.stylingNode),e.fitInHeader&&"top"===e.position&&(document.body.style.marginTop=e.headerGap?e.headerGap:this.height+"px")}recalculatePositions(){if(this.config.isFloatMode)return;this.scrollTop=window.pageYOffset||document.documentElement.scrollTop,this.scrollLeft=window.pageXOffset||document.documentElement.scrollLeft;const{top:t,left:e,height:o,width:i}=this.elem.getBoundingClientRect();this.width=i,this.height=o,this.elemTopPositionInPage=t+this.scrollTop,this.elemLeftPositionInPage=e+this.scrollLeft,this.elemBottomPositionInPage=this.elemTopPositionInPage+o,this.containerHeight=this.container?.getBoundingClientRect()?.height||0,this.containerTopPosition=this.container?this.container?.getBoundingClientRect()?.top+this.scrollTop:0,this.containerBottomPosition=this.containerTopPosition+(this.container?.getBoundingClientRect()?.height||0),this.offsetY=this.offset,this.activationOffset=this.offset+20}get canBeRun(){return this.elemBottomPositionInPage>this.triggerLimit}get position(){return this.config.position||"top"}get offset(){return void 0!==this.config?.offset?this.config.offset:40}get side(){var t;return null!==(t=this.config?.side)&&void 0!==t?t:"left"}get sideOffset(){return this.config.sideOffset}get displayWidth(){return this.config?.isFloatMode?this.config.width:this.width+"px"}set styling(t){this.stylingNode.innerHTML=`\n\t\t.${this.stylingNodeName} {\n\t\t\tword-break: break-all;\n\t\t\t${t}\n\t\t}\n\t`}}class c{constructor(){this.orderInPageCounter=0,this.items=[]}register(t){if(t.elem){if(!t.canBeRun)return console.groupCollapsed("Sticky Warning"),console.warn(t.elem,"This element needs to be position lower in the page when using position 'Bottom'. You can use position 'Top' as an alternative."),void console.groupEnd();this.bindCloseButton(t),t.orderInPage=this.orderInPageCounter,this.items.push(t),this.orderInPageCounter++}}run(){this.items.forEach((t=>t.elem&&this.update(t))),this.items.forEach((t=>t.elem&&this.align(t))),this.toggleGlobalClass(0<this.active.length)}update(t){window?.debugSticky&&(t.container&&(t.container.style.border="1px dashed black"),t.elem.style.border="1px dashed red"),"hidden"!==t.status&&(t.status="inactive",this.getCurrentPosition(t,this.calculateEarlyActivation(t))&&(t.status="dormant"),t.positionStatus=this.getCurrentPosition(t,"o-sticky-bhvr-stack"===t.config.behaviour?this.calculateGap(t):0),t.positionStatus!==o&&(t.status="active"))}align(t){if(800>window.innerWidth&&!t.config.useOnMobile)return;const e=[];if("inactive"===t.status&&(e.push("position: relative !important"),e.push(`z-index: ${(9999+(t.orderInPage||0)).toString()}`)),"active"===t.status){t.elem.classList.add("o-is-sticky"),t.config.isFloatMode||e.push("transition: transform 2s"),e.push(`width: ${t.displayWidth} !important`),e.push("position: fixed !important"),t.container&&"BODY"!==t.container.tagName&&(t.container.style.height=0<t.containerHeight?t.containerHeight+"px":"");const r="o-sticky-bhvr-stack"===t.config.behaviour?this.calculateGap(t):0,a=window.pageYOffset||document.documentElement.scrollTop,c=a+window.innerHeight;if(t.config.isFloatMode){let o=t.sideOffset;t.elem.classList.contains("alignfull")&&t.displayWidth.includes("100%")&&(o="","neve_body"===document.body.id&&(o=o="0px")),""!==o&&("left"===t.side?e.push(`left: ${t.sideOffset}`):e.push(`right: ${t.sideOffset}`))}else e.push(`left: ${t.elemLeftPositionInPage}px`);switch(t.positionStatus){case"top":e.push("top: 0px"),e.push(`transform: translateY(${t.offsetY+r}px)`);break;case i:e.push(`bottom: ${t.offsetY+r}px`),e.push("transform: unset");break;case n:e.push("top: 0px"),e.push(`transform: translateY(${t.containerBottomPosition-t.height-a}px)`);break;case s:e.push("bottom: 0px"),e.push("transform-origin: left bottom"),e.push(`transform: translateY(${t.containerBottomPosition-c}px)`);break;default:console.warn("Unknown position",t.positionStatus)}this.insertPlaceholder(t),"o-sticky-bhvr-hide"===t.config.behaviour&&e.push(`opacity: ${(o=this.calculateOpacity(t),1-(1-o)*(1-o)).toString()}`)}else t.isActive=!1,t.elem.classList.remove("o-is-sticky"),this.removePlaceholder(t);var o;t.styling=e.join(";\n"),t.isActive||t.isDormant?t.elem.classList.add(t.stylingNodeName):t.elem.classList.remove(t.stylingNodeName)}resize(){for(const t of this.items)t.elemLeftPositionInPage=(t.isActive?t.placeholder:t.elem).getBoundingClientRect().left+t.scrollLeft}insertPlaceholder(t){t.config.isFloatMode||t.elem?.parentElement?.contains(t.placeholder)||t.elem?.parentElement?.insertBefore(t.placeholder,t.elem)}removePlaceholder(t){!t.config.isFloatMode&&t.elem?.parentElement?.contains(t.placeholder)&&t.elem.parentElement.removeChild(t.placeholder)}getCurrentPosition(t){let e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:0;const r=window.pageYOffset||document.documentElement.scrollTop,a=r+window.innerHeight;if("top"===t.position&&(r+t.activationOffset+e>t.elemTopPositionInPage&&(!t.container||r+t.activationOffset+t.height+e<t.containerBottomPosition)||t.config.isFloatMode))return"top";if("bottom"===t.position&&(a-t.activationOffset-e>t.elemBottomPositionInPage&&(!t.container||a-t.activationOffset-e<t.containerBottomPosition)||t.config.isFloatMode))return i;if(t.container){if("top"===t.position&&(r+t.activationOffset+t.height+e>t.containerBottomPosition||t.config.isFloatMode))return n;if("bottom"===t.position&&(a-t.activationOffset-e>=t.containerBottomPosition||t.config.isFloatMode))return s}return o}calculateGap(t){let e=0;const o=t.elem.getBoundingClientRect()?.width||0;for(const i of this.active)i.orderInPage!==t.orderInPage&&i.container===t.container&&i.orderInPage<t.orderInPage&&"o-sticky-bhvr-stack"===i.config?.behaviour&&o>Math.abs(t.elemLeftPositionInPage-i.elemLeftPositionInPage)&&(e+=i.offset+i?.elem.getBoundingClientRect()?.height||0);return e}calculateEarlyActivation(t){let e=0;for(const o of this.active)o.orderInPage!==t.orderInPage&&o.orderInPage<t.orderInPage&&(e+=o.activationOffset+(o.elem?.getBoundingClientRect()?.height||0));return e}calculateOpacity(t){let e=1;const o=t.elem.getBoundingClientRect()?.height||0,i=t.elem.getBoundingClientRect()?.width||0,n=o+t.config.offset+(window.pageYOffset||document.documentElement.scrollTop);for(const s of[...this.dormant,...this.active])if(s.orderInPage!==t.orderInPage&&t.container===s.container&&s.orderInPage>t.orderInPage){const r=s.elem.getBoundingClientRect()?.height||0;if(i>Math.abs(t.elemLeftPositionInPage-s.elemLeftPositionInPage)){const t=Math.min(o,r);return e=Math.min(1,Math.max(0,s.elemTopPositionInPage+t-n)/t),e}}return e}updateTriggers(){this.items.forEach((t=>t.recalculatePositions()))}toggleGlobalClass(t){document.body.classList.toggle("o-sticky-is-active",t)}bindCloseButton(t){if(!t.config.isFloatMode)return;const e=t.elem.querySelectorAll(".o-sticky-close"),o=t.elem.querySelectorAll("a[href='#o-sticky-close']");[...Array.from(e),...Array.from(o)].forEach((e=>{e.addEventListener("click",(e=>{e.preventDefault(),t.status="hidden",t.elem.classList.add("o-is-close"),t.config.fitInHeader&&(document.body.style.marginTop="")}))}))}get active(){return this.items.filter((t=>"active"===t.status))}get dormant(){return this.items.filter((t=>"dormant"===t.status))}get isEmpty(){return 0===this.items.length}}var l;l=()=>{const o=document.querySelectorAll(".o-sticky");let i="\n\t\t.o-is-sticky {\n\t\t\tposition: fixed;\n\t\t\tz-index: 9999;\n\t\t}\n\t\t.o-is-close {\n\t\t\tdisplay: none !important;\n\t\t}\n\t";i=i.replace(/(\r\n|\n|\r|\t)/gm,"");let n=!1;!function(e,o){let i=arguments.length>2&&void 0!==arguments[2]?arguments[2]:50,n=0,s=!0;if(0==o.length)return void e?.();const r=setTimeout((()=>{s&&e?.()}),1e3*i),a=()=>{n+=1,n>=o.length&&s&&(s=!1,clearTimeout(r),e?.())};o.forEach((e=>{"lottie"===e&&t(a)}))}((()=>{const t=new c;o.forEach((o=>{try{if(!n){const t=document.createElement("style");t.innerText=i,t.id="o-stycky-css-gen",document.head.appendChild(t),n=!0}const s=(t=>Array.from(t.classList).reduce(((t,e)=>{if(e.includes("o-sticky-pos-bottom"))t.position="bottom";else if(e.includes("o-sticky-offset")){var o;t.offset=parseInt(null!==(o=e.split("-")?.pop())&&void 0!==o?o:"40")}else e.includes("o-sticky-scope")?t.scope=e:e.includes("o-sticky-bhvr")?t.behaviour=e:e.includes("o-sticky-use-mobile")?t.useOnMobile=!0:e.includes("o-sticky-float")?t.isFloatMode=!0:e.includes("o-sticky-width")?t.width=e.split("-").pop():e.includes("o-sticky-opt-side-offset")?t.sideOffset=e.split("-").pop():e.includes("o-sticky-side-right")?t.side="right":e.includes("o-sticky-header-space")?t.fitInHeader=!0:e.includes("o-sticky-header-gap")&&(t.headerGap=e.split("-").pop());return t}),{position:"top",offset:40,scope:"o-sticky-scope-main-area",behaviour:"o-sticky-bhvr-keep",useOnMobile:!1,isFloatMode:!1,width:"100%",sideOffset:"20px",side:"left",fitInHeader:!1,headerGap:""}))(o),r=((t,o)=>{let i=t?.parentElement;const n=[];for(;i;){if(e(i,["wp-block-themeisle-blocks-advanced-column","wp-block-group","wp-block-column"])&&"o-sticky-scope-parent"===o)return i;if(e(i,["wp-block-themeisle-blocks-advanced-columns","wp-block-group","wp-block-columns"])){if("o-sticky-scope-section"===o)return i;"o-sticky-scope-main-area"===o&&n.push(i)}i=i.parentElement}return"o-sticky-scope-main-area"===o&&0<n.length?n.pop():document.body})(o,s.scope);t.register(new a(o,s,r))}catch(t){console.error(t)}})),t.isEmpty||(t.run(),window.addEventListener("scroll",(()=>{t.run()})),window.addEventListener("resize",(()=>{t.resize()})),new ResizeObserver((e=>{console.log("Body height changed:",e?.[0]?.target.clientHeight),e?.[0]?.target.clientHeight&&t.updateTriggers()})).observe(document.body))}),["lottie"])},"undefined"!=typeof document&&("complete"!==document.readyState&&"interactive"!==document.readyState?document.addEventListener("DOMContentLoaded",l):l())}();