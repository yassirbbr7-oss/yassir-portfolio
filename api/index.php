<?php
// PERSONNALISATION : modifiez ces valeurs avec vos informations réelles.
$profil = [
    'nom' => 'Yassir',
    'titre' => 'Étudiant en Développement Digital',
    'formation' => 'Option Web Full Stack',
    'presentation' => 'Je construis mon parcours dans le développement web. Ce portfolio rassemble ma présentation et les travaux réalisés pendant ma formation.',
    'email' => '', // Votre adresse email
    'github' => '', // URL complète https://github.com/...
    'competences' => [], // Exemple : ['HTML', 'CSS', 'PHP'] ; ajoutez vos compétences réelles.
];
$ateliers = [
    ['M201', 'Préparation d’un projet web', 'Cadrer un projet, analyser les besoins et préparer sa conception.'],
    ['M202', 'Approche agile', 'Organiser le travail et découvrir une démarche de développement agile.'],
    ['M203', 'Gestion des données', 'Concevoir, structurer et exploiter les données d’une application.'],
    ['M204', 'Développement front-end', 'Construire des interfaces web accessibles et adaptées aux différents écrans.'],
    ['M205', 'Développement back-end', 'Développer la logique serveur et les fonctionnalités d’une application.'],
    ['M206', 'Création d’une application Cloud native', 'Découvrir la conception et le déploiement d’applications Cloud native.'],
    ['M207', 'Projet de synthèse', 'Réunir les acquis de la formation dans un projet complet.'],
];
// Ajoutez les vrais liens de vos travaux ici, par module.
// Exemple à remplacer : ['titre' => 'Atelier 1 : mon travail', 'url' => 'https://...']
$travaux = [
    'M201' => [
        ['titre' => 'Énoncé — Quick Annonces : méthodes classiques', 'url' => '/docs/atelier-1-gestion-projet.pdf'],
        ['titre' => 'Cours — Conception orientée objet avec UML', 'url' => '/docs/cours-uml.pdf'],
        ['titre' => 'Étude UML — Fabrication de composants de moteurs', 'url' => '/docs/uml-production-moteurs.docx'],
        ['titre' => 'Étude UML 1 — Bibliothèque intranet', 'url' => '/docs/uml-cas-1.docx'],
        ['titre' => 'Étude UML 2 — Centre de formation', 'url' => '/docs/uml-cas-2.docx'],
        ['titre' => 'Étude UML — Gestion des stages', 'url' => '/docs/uml-cas-3.docx'],
        ['titre' => 'Gestion des stages — Version 1', 'url' => '/docs/uml-cas-3-version-1.docx'],
        ['titre' => 'Gestion des stages — Version 2', 'url' => '/docs/uml-cas-3-version-2.docx'],
        ['titre' => 'Étude UML 4 — Commandes BRICOABC', 'url' => '/docs/uml-cas-4.docx'],
        ['titre' => 'Étude UML 5 — Bibliothèque municipale', 'url' => '/docs/uml-cas-5.docx'],
        ['titre' => 'Étude UML 6 — Académie et collèges', 'url' => '/docs/uml-cas-6.docx'],
        ['titre' => 'Présentation — Figma', 'url' => '/docs/figma-cours.pptx'],
        ['titre' => 'Présentation — Manipulation des formes', 'url' => '/docs/figma-formes.pptx'],
        ['titre' => 'Présentation — Création des maquettes avec Figma', 'url' => '/docs/figma-maquettes.pptx'],
        ['titre' => 'Organisation du groupe 2 — Yassir : outils de transformation', 'url' => '/docs/figma-groupe-2.docx'],
        ['titre' => 'Répartition des présentations Figma', 'url' => '/docs/figma-repartition.docx'],
    ],
    'M202' => [
        ['titre' => 'Cours — Gestion de projet agile et Scrum', 'url' => '/docs/cours-agile.pptx'],
    ],
    'M203' => [
    ],
    'M204' => [
    ],
    'M205' => [
    ],
    'M206' => [
    ],
    'M207' => [
    ],
];
function lienValide($url) {
    return (filter_var($url, FILTER_VALIDATE_URL) && in_array(parse_url($url, PHP_URL_SCHEME), ['http', 'https'], true))
        || (substr($url, 0, 6) === '/docs/' && strpos($url, '..') === false);
}
function e($texte) { return htmlspecialchars($texte, ENT_QUOTES, 'UTF-8'); }
?>
<!doctype html>
<html lang="fr">
<head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title><?= e($profil['nom']) ?> — Portfolio</title>
<meta name="description" content="Portfolio personnel et ateliers de Développement Digital option Web Full Stack.">
<style>
:root{color-scheme:dark;--ink:#e3e8dc;--muted:#929c96;--green:#b7ef9d;--line:#2d3833;--accent:#b7ef9d}*{box-sizing:border-box}html{scroll-behavior:smooth;scroll-padding-top:100px}body{margin:0;background:#0b100e;color:var(--ink);font:16px/1.65 system-ui,sans-serif}body:before{content:'';position:fixed;inset:0;pointer-events:none;z-index:-1;background:radial-gradient(ellipse at 83% 15%,#6f953d17,transparent 45%),radial-gradient(ellipse at 8% 50%,#98624512,transparent 45%)}a{color:inherit;text-decoration:none}button,input{font:inherit}a:focus-visible,button:focus-visible,input:focus-visible{outline:2px solid var(--green);outline-offset:5px}.wrap{width:min(1200px,calc(100% - 64px));margin:auto}header{position:sticky;top:0;z-index:20;background:#0b100eee;backdrop-filter:blur(15px);border-bottom:1px solid var(--line)}nav{display:flex;align-items:center;justify-content:space-between;height:80px}.brand{font:700 20px monospace;letter-spacing:-1px}.brand span{color:var(--green)}.links{display:flex;gap:30px;font:12px monospace;text-transform:uppercase;letter-spacing:1px}.links a{color:var(--muted)}.links a:hover{color:var(--green)}.hero{display:grid;grid-template-columns:1fr 1.1fr;gap:64px;align-items:center;min-height:760px;padding:70px 0 90px}.eyebrow{font:12px/1.6 monospace;letter-spacing:2px;text-transform:uppercase;color:var(--green)}.eyebrow:before{content:'>';margin-right:10px}h1{font-size:clamp(60px,7vw,100px);letter-spacing:-6px;line-height:1;margin:26px 0}h1 span{display:block;font-size:clamp(28px,3.4vw,46px);letter-spacing:-2px;color:#a7b49e;line-height:1.15;margin-top:20px}.lead{color:var(--muted);max-width:460px;font-size:16px}.actions{display:flex;flex-wrap:wrap;gap:12px;margin-top:28px}.btn{display:inline-flex;align-items:center;justify-content:center;padding:13px 20px;border:1px solid #43503e;border-radius:5px;font:12px monospace;text-transform:uppercase;letter-spacing:.5px;transition:transform .25s,background .25s}.btn.primary{background:var(--green);color:#172015;border-color:var(--green)}.btn:hover{transform:translateY(-3px);background:#283323}.btn.primary:hover{background:#d0ffba}.hero-note{display:flex;gap:22px;margin-top:32px;color:#737f76;font:11px monospace}.hero-note span:before{content:'● ';color:var(--green)}.scene{perspective:1100px;position:relative}.scene:before{content:'';position:absolute;inset:10% -10% -10%;background:radial-gradient(ellipse,#a4e28415,transparent 66%);pointer-events:none}.monitor{position:relative;padding:22px 22px 15px;background:linear-gradient(135deg,#414b48,#262e2c 55%,#343e38);border:1px solid #59625a;border-radius:25px;box-shadow:8px 10px 0 #161c19,0 28px 60px #0008;transform:rotateY(-7deg) rotateX(3deg);transition:transform .25s}.screen{position:relative;overflow:hidden;min-height:300px;padding:25px;background:radial-gradient(ellipse at center,#1b3422,#0b180f 90%);border:9px solid #19211d;border-radius:15px;box-shadow:inset 0 0 45px #0008;color:#b5e5a2;font:13px/1.85 monospace;text-shadow:0 0 7px #b7ef9d40}.screen:after{content:'';position:absolute;inset:0;pointer-events:none;background:repeating-linear-gradient(0deg,#0002 0px,#0002 1px,transparent 1px,transparent 4px);opacity:.55}.screen p{margin:0 0 12px}.screen .dim{color:#6d9576}.screen-command{background:none;border:0;border-bottom:1px dotted #61836a;padding:0;color:#b7ef9d;cursor:pointer;font:inherit}.command-row{display:flex;align-items:center;gap:10px;margin-top:20px}.command-row input{width:100%;min-width:0;background:transparent;border:0;color:#cdf2b9;outline:none;font:13px monospace;caret-color:var(--green)}#terminal-output{font-size:11px;min-height:22px;color:#b1cfa6;margin-top:10px}.monitor-foot{display:flex;align-items:center;justify-content:space-between;padding:14px 5px 0;font:10px monospace;color:#b4beb7;letter-spacing:1px}.power{width:8px;height:8px;border-radius:50%;background:var(--green);box-shadow:0 0 10px var(--green)}.stand{height:40px;width:100px;margin:auto;background:linear-gradient(90deg,#202925,#3f4942,#202925)}.stand:after{content:'';display:block;width:230px;height:13px;border-radius:3px 3px 15px 15px;background:linear-gradient(#505b50,#242e27);position:relative;left:-65px;top:28px;box-shadow:0 10px 20px #0009}.keyboard{display:grid;grid-template-columns:repeat(10,1fr);gap:5px;margin:24px 8px 0;padding:16px;background:linear-gradient(135deg,#353f37,#19211d);border:1px solid #4b5849;border-radius:12px;transform:perspective(750px) rotateX(14deg);box-shadow:0 9px 0 #111813,0 22px 30px #0006}.keyboard button{padding:9px 0;background:linear-gradient(#5a6656,#353f32);color:#e1e9d9;border:1px solid #6b7661;border-bottom:4px solid #222d21;border-radius:5px;font:11px monospace;cursor:pointer;box-shadow:inset 0 1px 1px #ffffff25;transition:transform .1s,background .15s}.keyboard button:hover{background:#74866a}.keyboard button:active{transform:translateY(3px);border-bottom-width:1px}.keyboard .wide{grid-column:span 4}.keyboard .enter{grid-column:span 3;background:linear-gradient(#b6d79a,#658451);color:#122411}.keyboard .esc{grid-column:span 3;background:linear-gradient(#c09b71,#7c5c3f)}.console-caption{text-align:center;font:10px monospace;letter-spacing:2px;color:#737f76;margin-top:20px}.ticker{border-block:1px solid var(--line);background:#111813;padding:18px 0;overflow:hidden}.ticker-track{display:flex;gap:50px;justify-content:center;color:#9ca993;font:12px monospace;letter-spacing:2px;white-space:nowrap}.ticker-track span:before{content:'✳';color:var(--green);margin-right:20px}section{padding:90px 0;border-bottom:1px solid var(--line)}.heading{display:flex;align-items:end;justify-content:space-between;gap:30px;margin-bottom:40px}h2{font-size:clamp(32px,4vw,48px);letter-spacing:-2px;line-height:1.2;margin:12px 0 0}.heading p{font-size:14px;color:var(--muted);max-width:370px;margin-bottom:0}.about{display:grid;grid-template-columns:1.3fr 1fr;gap:20px}.panel{padding:32px;background:#121a15;border:1px solid var(--line);border-radius:8px}.panel h3{font-size:19px;margin:0}.panel p{color:var(--muted);font-size:14px}.tags{display:flex;flex-wrap:wrap;gap:8px;margin-top:20px}.tag{font:12px monospace;background:#243121;padding:9px 12px;color:var(--green);border:1px solid #405139;border-radius:4px}.grid{display:grid;grid-template-columns:repeat(3,1fr);gap:20px;perspective:1200px}.card{--mx:50%;--my:50%;--accent:#b7ef9d;position:relative;padding:28px;background:linear-gradient(140deg,#1a241b,#111813);border:1px solid #354233;border-radius:9px;transition:transform .25s,border-color .25s,box-shadow .25s;transform-style:preserve-3d;isolation:isolate}.card:before{content:'';position:absolute;inset:0;border-radius:inherit;background:radial-gradient(300px circle at var(--mx) var(--my),#b7ef9d22,transparent 65%);opacity:0;pointer-events:none;z-index:-1;transition:opacity .25s}.card:hover,.card:focus-within{border-color:#9abb80;transform:translateY(-7px);box-shadow:0 20px 40px #0007,0 0 25px #b7ef9d0d}.card:hover:before,.card:focus-within:before{opacity:1}.card:nth-child(2n){--accent:#e7bf8a}.card:last-child{grid-column:span 3}.number{font:12px monospace;letter-spacing:1px;color:var(--accent);border:1px solid #46523a;border-radius:4px;padding:7px 10px;display:inline-block}.card h3{font-size:22px;letter-spacing:-.8px;line-height:1.3;margin:26px 0 12px;min-height:58px}.card p{color:var(--muted);font-size:13px}.status{font:10px monospace;text-transform:uppercase;letter-spacing:1px;color:#a5b19d}.atelier-toggle{display:flex;justify-content:space-between;align-items:center;gap:10px;width:100%;margin-top:22px;padding:16px 0 0;border:0;border-top:1px solid #364331;background:none;color:var(--accent);font:12px/1.5 monospace;cursor:pointer;text-align:left}.atelier-toggle span{font-size:22px;transition:transform .25s}.atelier-toggle[aria-expanded=true] span{transform:rotate(45deg)}.atelier-links[hidden]{display:none}.atelier-links{animation:links-in .3s ease}.atelier-links ul{list-style:none;padding:0;margin:20px 0 0;display:grid;gap:8px}.atelier-links a{display:flex;flex-direction:column;padding:12px;background:#202b1f;border:1px solid #3c4c34;border-radius:4px;font-size:12px;transition:background .2s}.atelier-links a:hover{background:#33432a}.new-tab{font:10px monospace;color:#9bac91;margin-top:5px}.contact{padding:44px;background:linear-gradient(110deg,#263021,#141d16);border:1px solid #46543c;border-radius:9px;display:flex;align-items:center;justify-content:space-between;gap:30px}.contact p{color:var(--muted)}footer{padding:30px 0;font:11px monospace;color:#82907d}.reveal-ready{opacity:0;transform:translateY(22px)}.reveal-ready.visible{opacity:1;transform:none;transition:opacity .6s,transform .6s}@keyframes links-in{from{opacity:0;transform:translateY(-5px)}to{opacity:1;transform:none}}@media(max-width:1000px){.hero{gap:30px}.screen{padding:16px;font-size:12px}.grid{grid-template-columns:repeat(2,1fr)}.card:last-child{grid-column:span 2}h1{letter-spacing:-4px}.keyboard{gap:4px;padding:10px}}@media(max-width:760px){.wrap{width:calc(100% - 36px)}nav{height:70px}.links{gap:16px;font-size:10px}.hero{grid-template-columns:1fr;padding:45px 0 55px;gap:45px;min-height:auto}h1{font-size:70px}.scene{width:min(500px,100%);margin:auto}.screen{min-height:270px}.about{grid-template-columns:1fr}.heading{align-items:start;flex-direction:column;gap:10px}section{padding:60px 0}.contact{align-items:start;flex-direction:column;padding:28px}.ticker-track{justify-content:start;padding-left:20px}.monitor{transform:none}}@media(max-width:480px){.grid{grid-template-columns:1fr}.card:last-child{grid-column:auto}.card h3{min-height:0}.monitor{padding:12px}.screen{border-width:6px;padding:15px;font-size:11px}.screen-command,.command-row input{font-size:11px}.keyboard button{font-size:9px;padding:7px 0}.brand{font-size:17px}.links{gap:12px}.hero-note{font-size:9px;gap:16px}.panel{padding:25px}}@media(prefers-reduced-motion:reduce){html{scroll-behavior:auto}*,*:before,*:after{transition:none!important;animation:none!important}.tilt{transform:none!important}.reveal-ready{opacity:1;transform:none}}
</style>
</head>
<body>
<header><nav class="wrap"><a class="brand" href="#accueil">Yassir<span>_</span></a><div class="links"><a href="#profil">Profil</a><a href="#ateliers">Ateliers</a><a href="#contact">Contact</a></div></nav></header>
<main>
<div class="wrap hero" id="accueil"><div><div class="eyebrow">Portfolio / Web Full Stack</div><h1><?= e($profil['nom']) ?><span>Une idée.<br>Du code. Un projet.</span></h1><p class="lead"><?= e($profil['titre']) ?><br><?= e($profil['formation']) ?></p><p class="lead"><?= e($profil['presentation']) ?></p><div class="actions"><a class="btn primary" href="#ateliers">Explorer mes ateliers ↗</a><a class="btn" href="#profil">À propos de moi</a></div><div class="hero-note"><span>7 modules de formation</span><span>Mon espace de travail</span></div></div>
<div class="scene"><div class="monitor tilt"><div class="screen"><p class="dim">YASSIR OS / PORTFOLIO v1.0</p><p>Bienvenue dans mon univers.<br>Conception, développement &amp; cloud.</p><p class="dim">Choisis une destination :</p><div><button class="screen-command" data-command="profil">profil</button> / <button class="screen-command" data-command="ateliers">ateliers</button> / <button class="screen-command" data-command="contact">contact</button></div><form id="terminal-form"><label class="command-row"><span aria-hidden="true">&gt;</span><input id="command" aria-label="Commande du terminal" placeholder="Tape help puis Entrée" autocomplete="off" autocapitalize="off" spellcheck="false" maxlength="30"></label></form><div id="terminal-output" role="status" aria-live="polite">Système prêt. À toi de jouer.</div></div><div class="monitor-foot"><span>YASSIR / PERSONAL COMPUTER</span><span class="power" aria-label="Terminal actif"></span></div></div><div class="stand" aria-hidden="true"></div><div class="keyboard" aria-label="Clavier du terminal"><?php foreach (str_split('QWERTYUIOPASDFGHJKLZXCVBNM') as $touche): ?><button type="button" data-key="<?= e(strtolower($touche)) ?>" aria-label="Touche <?= e($touche) ?>"><?= e($touche) ?></button><?php endforeach; ?><button type="button" class="wide" data-key="backspace">← EFFACER</button><button type="button" class="esc" data-key="escape">ESC</button><button type="button" class="enter" data-key="enter">ENTRÉE ↵</button></div><p class="console-caption">UNE INTERFACE RÉTRO. UN PARCOURS EN CONSTRUCTION.</p></div></div>
<div class="ticker" aria-hidden="true"><div class="ticker-track"><span>CONCEPTION</span><span>FRONT-END</span><span>BACK-END</span><span>CLOUD NATIVE</span><span>AGILE</span></div></div>
<section id="profil"><div class="wrap"><div class="heading"><div><div class="eyebrow">01 / À propos</div><h2>Derrière le terminal.</h2></div></div><div class="about"><article class="panel"><h3>Présentation professionnelle</h3><p><?= e($profil['presentation']) ?></p><p><strong>Formation :</strong><br><?= e($profil['titre']) ?> — <?= e($profil['formation']) ?></p><!-- Ajoutez ici votre établissement, vos expériences et vos projets réels. --></article><article class="panel"><h3>Compétences</h3><?php if ($profil['competences']): ?><div class="tags"><?php foreach ($profil['competences'] as $competence): ?><span class="tag"><?= e($competence) ?></span><?php endforeach; ?></div><?php else: ?><p>Mes compétences seront renseignées au fil de mon parcours.</p><?php endif; ?></article></div></div></section>
<section id="ateliers"><div class="wrap"><div class="heading"><div><div class="eyebrow">02 / Formation</div><h2>Les ateliers.</h2></div><p>Les sept modules de mon parcours Web Full Stack et leurs travaux pratiques.</p></div><div class="grid"><?php foreach ($ateliers as $atelier): ?><article class="card tilt"><span class="number"><?= e($atelier[0]) ?></span><h3><?= e($atelier[1]) ?></h3><p><?= e($atelier[2]) ?></p><?php $liens = array_filter($travaux[$atelier[0]] ?? [], function($lien) { return isset($lien['titre'], $lien['url']) && lienValide($lien['url']); }); ?>
<span class="status"><?= count($liens) ?> lien<?= count($liens) > 1 ? 's' : '' ?></span>
<button class="atelier-toggle" type="button" aria-expanded="false" aria-controls="travaux-<?= e($atelier[0]) ?>">Ouvrir les documents <span aria-hidden="true">+</span></button>
<div class="atelier-links" id="travaux-<?= e($atelier[0]) ?>" hidden>
<?php if ($liens): ?><ul><?php foreach ($liens as $lien): ?><li><a href="<?= e($lien['url']) ?>" target="_blank" rel="noopener noreferrer"><?= e($lien['titre']) ?><span class="new-tab"><?= e(strtoupper(pathinfo(parse_url($lien['url'], PHP_URL_PATH), PATHINFO_EXTENSION))) ?> · Ouvrir ↗</span></a></li><?php endforeach; ?></ul>
<?php else: ?><p>Les liens de cet atelier seront ajoutés prochainement.</p><?php endif; ?>
</div></article><?php endforeach; ?></div></div></section>
<section id="contact"><div class="wrap contact"><div><div class="eyebrow">03 / Contact</div><h2>Échangeons.</h2><p>Pour discuter de mon parcours ou de mes travaux.</p></div><div class="actions"><?php if (filter_var($profil['email'], FILTER_VALIDATE_EMAIL)): ?><a class="btn primary" href="mailto:<?= e($profil['email']) ?>">Me contacter</a><?php endif; ?><?php if (filter_var($profil['github'], FILTER_VALIDATE_URL) && parse_url($profil['github'], PHP_URL_SCHEME) === 'https'): ?><a class="btn" href="<?= e($profil['github']) ?>" target="_blank" rel="noopener noreferrer">GitHub</a><?php endif; ?><?php if (!$profil['email'] && !$profil['github']): ?><p>Coordonnées à renseigner.</p><?php endif; ?></div></div></section>
</main><footer><div class="wrap">© <?= date('Y') ?> <?= e($profil['nom']) ?> · Développement Digital</div></footer>
<script>
const command=document.getElementById('command'),output=document.getElementById('terminal-output');
function runCommand(value){
 const text=value.trim().toLowerCase();
 if(['profil','ateliers','contact'].includes(text)){
  output.textContent='Ouverture : '+text+'…';
  document.getElementById(text).scrollIntoView({behavior:window.matchMedia('(prefers-reduced-motion: reduce)').matches?'auto':'smooth'});
 }else if(text==='help'){output.textContent='Commandes : profil · ateliers · contact · clear';}
 else if(text==='clear'){output.textContent='Système prêt.';}
 else{output.textContent=text?'Commande inconnue. Tape help.':'Tape profil, ateliers ou contact.';}
 command.value='';
}
document.getElementById('terminal-form').addEventListener('submit',event=>{event.preventDefault();runCommand(command.value);});
document.querySelectorAll('[data-command]').forEach(button=>button.addEventListener('click',()=>runCommand(button.dataset.command)));
document.querySelectorAll('[data-key]').forEach(button=>button.addEventListener('click',()=>{
 const key=button.dataset.key;
 if(key==='enter')runCommand(command.value);
 else if(key==='backspace')command.value=command.value.slice(0,-1);
 else if(key==='escape')command.value='';
 else if(command.value.length<30)command.value+=key;
}));

document.querySelectorAll('.atelier-toggle').forEach(button=>button.addEventListener('click',()=>{
 const expanded=button.getAttribute('aria-expanded')==='true';
 button.setAttribute('aria-expanded',String(!expanded));
 document.getElementById(button.getAttribute('aria-controls')).hidden=expanded;
}));
const reduced=window.matchMedia('(prefers-reduced-motion: reduce)');
const fine=window.matchMedia('(hover: hover) and (pointer: fine)');
document.querySelectorAll('.tilt').forEach(card=>{
 let frame=0;
 card.addEventListener('pointermove',event=>{
  if(reduced.matches||!fine.matches||event.pointerType!=='mouse')return;
  const r=card.getBoundingClientRect(),x=(event.clientX-r.left)/r.width,y=(event.clientY-r.top)/r.height;
  cancelAnimationFrame(frame);
  frame=requestAnimationFrame(()=>{
   card.style.setProperty('--mx',`${x*100}%`);card.style.setProperty('--my',`${y*100}%`);
   card.style.transform=`perspective(1000px) rotateX(${(.5-y)*9}deg) rotateY(${(x-.5)*11}deg) translateY(-9px)`;
  });
 });
 card.addEventListener('pointerleave',()=>{cancelAnimationFrame(frame);card.style.transform='';});
});
if(!reduced.matches&&'IntersectionObserver' in window){
 const observer=new IntersectionObserver(entries=>entries.forEach(entry=>{
  if(entry.isIntersecting){entry.target.classList.add('visible');observer.unobserve(entry.target);}
 }),{threshold:.08});
 document.querySelectorAll('.panel,.heading,.contact').forEach(el=>{el.classList.add('reveal-ready');observer.observe(el);});
}
reduced.addEventListener('change',()=>{if(reduced.matches){document.querySelectorAll('.tilt').forEach(el=>el.style.transform='');document.querySelectorAll('.reveal-ready').forEach(el=>el.classList.add('visible'));}});
</script>
</body></html>
