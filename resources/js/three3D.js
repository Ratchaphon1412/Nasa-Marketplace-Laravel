import * as THREE from 'three';
import {OrbitControls} from "three/examples/jsm/controls/OrbitControls";

const scene = new THREE.Scene();

const geometry = new THREE.SphereGeometry( 3, 64, 64 );

const textureLoader = new THREE.TextureLoader();
const texture = textureLoader.load("https://s3-us-west-2.amazonaws.com/s.cdpn.io/17271/ldem_3_8bit.jpg");
const displacementMap = textureLoader.load("https://s3-us-west-2.amazonaws.com/s.cdpn.io/17271/lroc_color_poles_1k.jpg");

const material = new THREE.MeshStandardMaterial( {
    color: 0xffffff,
    map: texture,
    displacementMap: displacementMap,
    displacementScale: 0.5,
    bumpMap: displacementMap,
    bumpScale: 0.004,
} );


const mesh = new THREE.Mesh( geometry, material );
scene.add( mesh );

//size responsive

let w;
if (window.innerWidth < 800) {
    w = window.innerWidth ;
}else {
    w = window.innerWidth / 2;
}

let h = window.innerHeight;


const light = new THREE.DirectionalLight( 0xffffff, 5);
light.position.set( 100, 10, 70);

scene.add( light );

const camera = new THREE.PerspectiveCamera(25,w/h);
camera.position.z = 20;
scene.add(camera);

const canvas = document.querySelector("#webgl");
const render = new THREE.WebGLRenderer({
    canvas:canvas,
    antialias: true,

});
render.setSize(w,h);

render.render(scene,camera);



const controls = new OrbitControls(camera, canvas);
controls.enableDamping = true;
controls.enablePan = false;
controls.enableZoom =false;
controls.enableRotate = true;

window.addEventListener('resize', () => {

    if(window.innerWidth < 800){
        w = window.innerWidth;

    }else{
        w = window.innerWidth / 2;

    }
    h = window.innerHeight;

    camera.aspect = w / h;
    camera.updateProjectionMatrix();
    render.setSize(w, h);

});


const loop = () => {
    mesh.rotation.y += 0.003;
    render.render(scene, camera);
    window.requestAnimationFrame(loop);
}

loop();