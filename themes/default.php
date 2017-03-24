<style>
    /* reset */
    html,body,div,span,h1,h2,h3,h4,h5,h6,p,pre,a,code,em,img,strong,b,i,ul,li{
        margin: 0;
        padding: 0;
        border: 0;
        font-size: 100%;
        font: inherit;
        vertical-align: baseline;
    }
    body{ line-height: 1; }
    ul{ list-style: none; }
    /* header */
    .header{ min-width: 860px; margin: 0 auto; background: #f3f3f3; padding: 40px 50px 30px 50px; border-bottom: #ccc 1px solid; }
    .header h1{ font-size: 30px; color: #e57373; margin-bottom: 30px; }
    .header h1 span, .header h1 span a{ color: #e51717; }
    .header h1 a{ color: #e57373; }
    .header h1 a:hover{ color: #e51717; }
    .header img{ float: right; margin-top: -15px; }
    .header h2{ font-size: 20px; line-height: 1.25; }
    .header pre{ margin: 10px 0; overflow-y: scroll; font-family: Courier, monospace; font-size: 14px; }
    .panel-group{margin-top: 30px;}
    .panel-group pre{font-family: Consolas, Courier New, monospace;}
    .highlight{background-color:#FFEBEB;}
    <?php $rand = random_int(100000, 999999)?>
    .panel<?php echo $rand?> > .panel-heading{cursor: pointer; padding:10px 30px;}
    .panel<?php echo $rand?> > .panel-heading:hover{background-color: #edf9ff;}
    .panel-heading-hover{background-color: #edf9ff;}
    .panel<?php echo $rand?> > .panel-body{padding:10px 30px;}
    /* highlight.js */
    .comment{ color: #808080; font-style: italic; }
    .keyword{ color: #000080; }
    .number{ color: #00a; }
    .number{ font-weight: normal; }
    .string, .value{ color: #0a0; }
    .symbol, .char { color: #505050; background: #d0eded; font-style: italic; }
    .phpdoc{ text-decoration: underline; }
    .variable{ color: #a00; }
    /* request */
    .request{ background-color: #fafafa; padding-top: 40px; padding-bottom: 40px; margin-top: 40px; margin-bottom: 1px; }
    .request .code{ min-width: 860px; margin: 0 auto; padding: 15px 50px; }
    .request .code pre{ font-size: 14px; line-height: 18px; font-family: Consolas, Courier New, monospace; display: inline; word-wrap: break-word; }
</style>
<?php $count = 1; ?>
<div class="container">
    <div class="header">
        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAAA6CAMAAAA3Dq9LAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyBpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDE0IDc5LjE1MTQ4MSwgMjAxMy8wMy8xMy0xMjowOToxNSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6QUFDNzhCNUM1QjhDMTFFM0I3QzE5ODkzMUQwNUQyMzYiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6QUFDNzhCNUI1QjhDMTFFM0I3QzE5ODkzMUQwNUQyMzYiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBXaW5kb3dzIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6NzBFREE5RDFDNDdEMTFFMkJGNUU4MkNCQUY4MUM3RUEiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6NzBFREE5RDJDNDdEMTFFMkJGNUU4MkNCQUY4MUM3RUEiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz5g4xOFAAADAFBMVEUAAAD////lc3PahobplZXhl5felpbdlpbqoKDln5/moqLgn5/ppqbopaXmpqborKznrKziqKjlq6vnrq7psLDnr6/irKzpsrLqtLTps7Pst7ferKzqtrbntLTturrtvLzqvLzourrhtbXrwMDov7/sw8PrwsLowMDhvb3tysrqycntz8/qzMzqzs7u1NTr09Ps19fo1NTv29vo1dXx4ODx4uLw4uLx5OTq39/x5+fx6Ojw5+fo39/x6enw6Ojp4eHz7Ozy6+vt5+fq5OTz7u7y7e3s5+fz8PDy7+/x7u7z8fHy8PDt6+vz8vLz8/Py8vLw8PDv7+/t7e0AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACxvAGHAAAB9klEQVR42qTXfVvBUBgG8Od6qGwx75WoVCKJSlR6pZJSQt//w8S2w86cPXaO+z9n8xu7bs8Z+KXSDgWDoTZ5ClAHm2GcJNxUBfoRNBPpKwInaKesBnQ1BmjvSkAeZ8mrAC1tDmgtBSCFjmTkgQZyuZUGDB6IygJ1dKUuCRhuwJADKriQmgzQ0xcBXQYooiBl/0BXEwHiQgNV4oAd++WxX4CV+PRvZObnyP4IHZ8AK/E1W7giCg1EiS/ZygVRaCA6VGUrVaLQQJR4EcCGD8CgAGM54CjxDDgnCg1Eic/YYokoNBAlLrHFgmOxQgMdZ4kLIkDvkUAelwFYpICWJgT2uN9UhwC4SYyHbDmN3hMaiEmcFgP8JgHEIJwBMX495QXUXBMk5gFwhQZiEjNgECMmNBCTOPZtHXhCYpMAahLv7E+zu43EJgH0JPZKZRHoaDLAvNAzICM4zTWVhYUGYYmtxB/H06E8fokLNomuC0gJrpJgV0kIDuZ5oCH6okkGJEX7VIsDDGmAFRqEJfYD4I0D0FWA6ByooApgFRo8HidM4NN+ZvYADAZ4ljh3YCbndbxmAXIldj/1gGsSy6U8BQaaOqAPJsADrpD7CfC1tgLwPL0HW+rv3zRv4uu66vs37qwefGQDSsm+sSoPR2OFjIZL/zf6yb8AAwCmB2Y7BrVl9wAAAABJRU5ErkJggg==" alt="Exception">
        <h1><span><?php echo $type?></span></h1>
        <h2><?php echo $errorMsg?></h2>
    </div>
    <div class="panel-group">
        <div class="panel panel-default panel<?php echo $rand?>">
            <div class="panel-heading panel-heading-hover"><?php echo $count++; ?>. In <?php echo $errorFile . ' at line ' . $errorLine?></div>
            <div class="panel-body">
                <pre>
<?php
echo self::getSource($errorFile, $errorLine);
?>
                </pre>
            </div>
        </div>
        <?php foreach ($trace as $file) :?>
            <div class="panel panel-default panel<?php echo $rand?>">
                <div class="panel-heading"><?php echo $count++; ?>. In <?php echo $file['file'] . ' at line ' . $file['line']?></div>
                <div class="panel-body">
                    <pre>
<?php
echo self::getSource($file['file'], $file['line']);
?>
                    </pre>
                </div>
            </div>
        <?php endforeach;?>
    </div>
    <div class="request">
        <div class="code">
            <pre class="php">
<?php foreach (['$_GET' => $_GET, '$_POST' => $_POST, '$_COOKIE' => $_COOKIE] as $name => $array):
    if (count($array)) :
?>
<?php echo $name?> = [
<?php foreach ($array as $key => $value):?>
    '<?php echo $key?>' => '<?php echo $value?>'
<?php endforeach;?>
];

<?php
    endif;
endforeach;
?>
            </pre>
        </div>
    </div>
</div>
<script type="text/javascript">
    var hljs=new function(){function l(o){return o.replace(/&/gm,"&amp;").replace(/</gm,"&lt;").replace(/>/gm,"&gt;")}function b(p){for(var o=p.firstChild;o;o=o.nextSibling){if(o.nodeName=="CODE"){return o}if(!(o.nodeType==3&&o.nodeValue.match(/\s+/))){break}}}function h(p,o){return Array.prototype.map.call(p.childNodes,function(q){if(q.nodeType==3){return o?q.nodeValue.replace(/\n/g,""):q.nodeValue}if(q.nodeName=="BR"){return"\n"}return h(q,o)}).join("")}function a(q){var p=(q.className+" "+q.parentNode.className).split(/\s+/);p=p.map(function(r){return r.replace(/^language-/,"")});for(var o=0;o<p.length;o++){if(e[p[o]]||p[o]=="no-highlight"){return p[o]}}}function c(q){var o=[];(function p(r,s){for(var t=r.firstChild;t;t=t.nextSibling){if(t.nodeType==3){s+=t.nodeValue.length}else{if(t.nodeName=="BR"){s+=1}else{if(t.nodeType==1){o.push({event:"start",offset:s,node:t});s=p(t,s);o.push({event:"stop",offset:s,node:t})}}}}return s})(q,0);return o}function j(x,v,w){var p=0;var y="";var r=[];function t(){if(x.length&&v.length){if(x[0].offset!=v[0].offset){return(x[0].offset<v[0].offset)?x:v}else{return v[0].event=="start"?x:v}}else{return x.length?x:v}}function s(A){function z(B){return" "+B.nodeName+'="'+l(B.value)+'"'}return"<"+A.nodeName+Array.prototype.map.call(A.attributes,z).join("")+">"}while(x.length||v.length){var u=t().splice(0,1)[0];y+=l(w.substr(p,u.offset-p));p=u.offset;if(u.event=="start"){y+=s(u.node);r.push(u.node)}else{if(u.event=="stop"){var o,q=r.length;do{q--;o=r[q];y+=("</"+o.nodeName.toLowerCase()+">")}while(o!=u.node);r.splice(q,1);while(q<r.length){y+=s(r[q]);q++}}}}return y+l(w.substr(p))}function f(q){function o(s,r){return RegExp(s,"m"+(q.cI?"i":"")+(r?"g":""))}function p(y,w){if(y.compiled){return}y.compiled=true;var s=[];if(y.k){var r={};function z(A,t){t.split(" ").forEach(function(B){var C=B.split("|");r[C[0]]=[A,C[1]?Number(C[1]):1];s.push(C[0])})}y.lR=o(y.l||hljs.IR,true);if(typeof y.k=="string"){z("keyword",y.k)}else{for(var x in y.k){if(!y.k.hasOwnProperty(x)){continue}z(x,y.k[x])}}y.k=r}if(w){if(y.bWK){y.b="\\b("+s.join("|")+")\\s"}y.bR=o(y.b?y.b:"\\B|\\b");if(!y.e&&!y.eW){y.e="\\B|\\b"}if(y.e){y.eR=o(y.e)}y.tE=y.e||"";if(y.eW&&w.tE){y.tE+=(y.e?"|":"")+w.tE}}if(y.i){y.iR=o(y.i)}if(y.r===undefined){y.r=1}if(!y.c){y.c=[]}for(var v=0;v<y.c.length;v++){if(y.c[v]=="self"){y.c[v]=y}p(y.c[v],y)}if(y.starts){p(y.starts,w)}var u=[];for(var v=0;v<y.c.length;v++){u.push(y.c[v].b)}if(y.tE){u.push(y.tE)}if(y.i){u.push(y.i)}y.t=u.length?o(u.join("|"),true):{exec:function(t){return null}}}p(q)}function d(D,E){function o(r,M){for(var L=0;L<M.c.length;L++){var K=M.c[L].bR.exec(r);if(K&&K.index==0){return M.c[L]}}}function s(K,r){if(K.e&&K.eR.test(r)){return K}if(K.eW){return s(K.parent,r)}}function t(r,K){return K.i&&K.iR.test(r)}function y(L,r){var K=F.cI?r[0].toLowerCase():r[0];return L.k.hasOwnProperty(K)&&L.k[K]}function G(){var K=l(w);if(!A.k){return K}var r="";var N=0;A.lR.lastIndex=0;var L=A.lR.exec(K);while(L){r+=K.substr(N,L.index-N);var M=y(A,L);if(M){v+=M[1];r+='<span class="'+M[0]+'">'+L[0]+"</span>"}else{r+=L[0]}N=A.lR.lastIndex;L=A.lR.exec(K)}return r+K.substr(N)}function z(){if(A.sL&&!e[A.sL]){return l(w)}var r=A.sL?d(A.sL,w):g(w);if(A.r>0){v+=r.keyword_count;B+=r.r}return'<span class="'+r.language+'">'+r.value+"</span>"}function J(){return A.sL!==undefined?z():G()}function I(L,r){var K=L.cN?'<span class="'+L.cN+'">':"";if(L.rB){x+=K;w=""}else{if(L.eB){x+=l(r)+K;w=""}else{x+=K;w=r}}A=Object.create(L,{parent:{value:A}});B+=L.r}function C(K,r){w+=K;if(r===undefined){x+=J();return 0}var L=o(r,A);if(L){x+=J();I(L,r);return L.rB?0:r.length}var M=s(A,r);if(M){if(!(M.rE||M.eE)){w+=r}x+=J();do{if(A.cN){x+="</span>"}A=A.parent}while(A!=M.parent);if(M.eE){x+=l(r)}w="";if(M.starts){I(M.starts,"")}return M.rE?0:r.length}if(t(r,A)){throw"Illegal"}w+=r;return r.length||1}var F=e[D];f(F);var A=F;var w="";var B=0;var v=0;var x="";try{var u,q,p=0;while(true){A.t.lastIndex=p;u=A.t.exec(E);if(!u){break}q=C(E.substr(p,u.index-p),u[0]);p=u.index+q}C(E.substr(p));return{r:B,keyword_count:v,value:x,language:D}}catch(H){if(H=="Illegal"){return{r:0,keyword_count:0,value:l(E)}}else{throw H}}}function g(s){var o={keyword_count:0,r:0,value:l(s)};var q=o;for(var p in e){if(!e.hasOwnProperty(p)){continue}var r=d(p,s);r.language=p;if(r.keyword_count+r.r>q.keyword_count+q.r){q=r}if(r.keyword_count+r.r>o.keyword_count+o.r){q=o;o=r}}if(q.language){o.second_best=q}return o}function i(q,p,o){if(p){q=q.replace(/^((<[^>]+>|\t)+)/gm,function(r,v,u,t){return v.replace(/\t/g,p)})}if(o){q=q.replace(/\n/g,"<br>")}return q}function m(r,u,p){var v=h(r,p);var t=a(r);if(t=="no-highlight"){return}var w=t?d(t,v):g(v);t=w.language;var o=c(r);if(o.length){var q=document.createElement("pre");q.innerHTML=w.value;w.value=j(o,c(q),v)}w.value=i(w.value,u,p);var s=r.className;if(!s.match("(\\s|^)(language-)?"+t+"(\\s|$)")){s=s?(s+" "+t):t}r.innerHTML=w.value;r.className=s;r.result={language:t,kw:w.keyword_count,re:w.r};if(w.second_best){r.second_best={language:w.second_best.language,kw:w.second_best.keyword_count,re:w.second_best.r}}}function n(){if(n.called){return}n.called=true;Array.prototype.map.call(document.getElementsByTagName("pre"),b).filter(Boolean).forEach(function(o){m(o,hljs.tabReplace)})}function k(){window.addEventListener("DOMContentLoaded",n,false);window.addEventListener("load",n,false)}var e={};this.LANGUAGES=e;this.highlight=d;this.highlightAuto=g;this.fixMarkup=i;this.highlightBlock=m;this.initHighlighting=n;this.initHighlightingOnLoad=k;this.IR="[a-zA-Z][a-zA-Z0-9_]*";this.UIR="[a-zA-Z_][a-zA-Z0-9_]*";this.NR="\\b\\d+(\\.\\d+)?";this.CNR="(\\b0[xX][a-fA-F0-9]+|(\\b\\d+(\\.\\d*)?|\\.\\d+)([eE][-+]?\\d+)?)";this.BNR="\\b(0b[01]+)";this.RSR="!|!=|!==|%|%=|&|&&|&=|\\*|\\*=|\\+|\\+=|,|\\.|-|-=|/|/=|:|;|<|<<|<<=|<=|=|==|===|>|>=|>>|>>=|>>>|>>>=|\\?|\\[|\\{|\\(|\\^|\\^=|\\||\\|=|\\|\\||~";this.BE={b:"\\\\[\\s\\S]",r:0};this.ASM={cN:"string",b:"'",e:"'",i:"\\n",c:[this.BE],r:0};this.QSM={cN:"string",b:'"',e:'"',i:"\\n",c:[this.BE],r:0};this.CLCM={cN:"comment",b:"//",e:"$"};this.CBLCLM={cN:"comment",b:"/\\*",e:"\\*/"};this.HCM={cN:"comment",b:"#",e:"$"};this.NM={cN:"number",b:this.NR,r:0};this.CNM={cN:"number",b:this.CNR,r:0};this.BNM={cN:"number",b:this.BNR,r:0};this.inherit=function(q,r){var o={};for(var p in q){o[p]=q[p]}if(r){for(var p in r){o[p]=r[p]}}return o}}();hljs.LANGUAGES.php=function(a){var e={cN:"variable",b:"\\$+[a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*"};var b=[a.inherit(a.ASM,{i:null}),a.inherit(a.QSM,{i:null}),{cN:"string",b:'b"',e:'"',c:[a.BE]},{cN:"string",b:"b'",e:"'",c:[a.BE]}];var c=[a.BNM,a.CNM];var d={cN:"title",b:a.UIR};return{cI:true,k:"and include_once list abstract global private echo interface as static endswitch array null if endwhile or const for endforeach self var while isset public protected exit foreach throw elseif include __FILE__ empty require_once do xor return implements parent clone use __CLASS__ __LINE__ else break print eval new catch __METHOD__ case exception php_user_filter default die require __FUNCTION__ enddeclare final try this switch continue endfor endif declare unset true false namespace trait goto instanceof insteadof __DIR__ __NAMESPACE__ __halt_compiler",c:[a.CLCM,a.HCM,{cN:"comment",b:"/\\*",e:"\\*/",c:[{cN:"phpdoc",b:"\\s@[A-Za-z]+"}]},{cN:"comment",eB:true,b:"__halt_compiler.+?;",eW:true},{cN:"string",b:"<<<['\"]?\\w+['\"]?$",e:"^\\w+;",c:[a.BE]},{cN:"preprocessor",b:"<\\?php",r:10},{cN:"preprocessor",b:"\\?>"},e,{cN:"function",bWK:true,e:"{",k:"function",i:"\\$|\\[|%",c:[d,{cN:"params",b:"\\(",e:"\\)",c:["self",e,a.CBLCLM].concat(b).concat(c)}]},{cN:"class",bWK:true,e:"{",k:"class",i:"[:\\(\\$]",c:[{bWK:true,eW:true,k:"extends",c:[d]},d]},{b:"=>"}].concat(b).concat(c)}}(hljs);
</script>
<script>
    var $blocks = document.getElementsByTagName('pre');
    for (var $i = 0, $count = $blocks.length; $i < $count; $i ++) {
        hljs.highlightBlock($blocks[$i], '    ');
    }
    var $groups = document.querySelectorAll('.panel-group>.panel<?php echo $rand?>');
    for (var $i = 0, $count = $groups.length; $i < $count; $i ++ ) {
        var $group = $groups[$i];
        if ($i != 0) {
            $group.querySelector('.panel-body').style.display = 'none';
        }
        $group.querySelector('.panel-heading').onclick = function () {
            var $parentBody = this.parentNode.querySelector('.panel-body');
            var $display = ($parentBody.currentStyle ? $parentBody.currentStyle : window.getComputedStyle($parentBody)).display;
            if ($display == 'block') {
                $parentBody.style.display = 'none';
                removeClass(this, 'panel-heading-hover');
            } else {
                $parentBody.style.display = 'block';
                addClass(this, 'panel-heading-hover');
            }
        }
    }
    function hasClass(obj, cls) {
        return obj.className.match(new RegExp('(\\s|^)' + cls + '(\\s|$)'));
    }

    function addClass(obj, cls) {
        if (!this.hasClass(obj, cls)) obj.className += " " + cls;
    }

    function removeClass(obj, cls) {
        if (hasClass(obj, cls)) {
            var reg = new RegExp('(\\s|^)' + cls + '(\\s|$)');
            obj.className = obj.className.replace(reg, ' ');
        }
    }
</script>
