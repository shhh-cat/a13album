<?php

use Illuminate\Database\Seeder;
use App\LythuyetLy;
class LythuyetLyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = '[{"cau":1,"dapan":"A","chuong":1},{"cau":2,"dapan":"B","chuong":1},{"cau":3,"dapan":"A","chuong":1},{"cau":4,"dapan":"C","chuong":1},{"cau":5,"dapan":"A","chuong":1},{"cau":6,"dapan":"D","chuong":1},{"cau":7,"dapan":"D","chuong":1},{"cau":8,"dapan":"D","chuong":1},{"cau":9,"dapan":"A","chuong":1},{"cau":10,"dapan":"D","chuong":1},{"cau":11,"dapan":"D","chuong":1},{"cau":12,"dapan":"C","chuong":1},{"cau":13,"dapan":"A","chuong":1},{"cau":14,"dapan":"B","chuong":1},{"cau":15,"dapan":"D","chuong":1},{"cau":16,"dapan":"A","chuong":1},{"cau":17,"dapan":"B","chuong":1},{"cau":18,"dapan":"B","chuong":1},{"cau":19,"dapan":"D","chuong":1},{"cau":20,"dapan":"D","chuong":1},{"cau":21,"dapan":"D","chuong":1},{"cau":22,"dapan":"D","chuong":1},{"cau":23,"dapan":"D","chuong":1},{"cau":24,"dapan":"B","chuong":1},{"cau":25,"dapan":"C","chuong":1},{"cau":26,"dapan":"C","chuong":1},{"cau":27,"dapan":"B","chuong":1},{"cau":28,"dapan":"C","chuong":1},{"cau":29,"dapan":"A","chuong":1},{"cau":30,"dapan":"B","chuong":1},{"cau":31,"dapan":"A","chuong":1},{"cau":32,"dapan":"C","chuong":1},{"cau":33,"dapan":"B","chuong":1},{"cau":34,"dapan":"B","chuong":1},{"cau":35,"dapan":"B","chuong":1},{"cau":36,"dapan":"B","chuong":1},{"cau":37,"dapan":"D","chuong":1},{"cau":38,"dapan":"A","chuong":1},{"cau":39,"dapan":"C","chuong":1},{"cau":40,"dapan":"A","chuong":1},{"cau":41,"dapan":"C","chuong":1},{"cau":42,"dapan":"D","chuong":1},{"cau":43,"dapan":"B","chuong":1},{"cau":44,"dapan":"B","chuong":1},{"cau":45,"dapan":"B","chuong":1},{"cau":46,"dapan":"C","chuong":1},{"cau":47,"dapan":"B","chuong":1},{"cau":48,"dapan":"D","chuong":1},{"cau":49,"dapan":"A","chuong":1},{"cau":50,"dapan":"D","chuong":1},{"cau":51,"dapan":"D","chuong":1},{"cau":52,"dapan":"C","chuong":1},{"cau":53,"dapan":"C","chuong":1},{"cau":54,"dapan":"A","chuong":1},{"cau":55,"dapan":"D","chuong":1},{"cau":56,"dapan":"C","chuong":1},{"cau":57,"dapan":"C","chuong":1},{"cau":58,"dapan":"A","chuong":1},{"cau":59,"dapan":"A","chuong":1},{"cau":60,"dapan":"A","chuong":1},{"cau":61,"dapan":"C","chuong":1},{"cau":62,"dapan":"C","chuong":1},{"cau":63,"dapan":"A","chuong":1},{"cau":64,"dapan":"C","chuong":1},{"cau":65,"dapan":"D","chuong":1},{"cau":66,"dapan":"A","chuong":1},{"cau":67,"dapan":"A","chuong":1},{"cau":68,"dapan":"C","chuong":1},{"cau":69,"dapan":"C","chuong":1},{"cau":70,"dapan":"B","chuong":1},{"cau":71,"dapan":"B","chuong":1},{"cau":72,"dapan":"C","chuong":1},{"cau":73,"dapan":"C","chuong":1},{"cau":74,"dapan":"A","chuong":1},{"cau":75,"dapan":"B","chuong":1},{"cau":76,"dapan":"D","chuong":1},{"cau":77,"dapan":"B","chuong":1},{"cau":78,"dapan":"C","chuong":1},{"cau":79,"dapan":"B","chuong":1},{"cau":80,"dapan":"D","chuong":1},{"cau":81,"dapan":"A","chuong":1},{"cau":82,"dapan":"B","chuong":1},{"cau":83,"dapan":"C","chuong":1},{"cau":84,"dapan":"C","chuong":1},{"cau":85,"dapan":"D","chuong":1},{"cau":86,"dapan":"B","chuong":1},{"cau":87,"dapan":"B","chuong":1},{"cau":88,"dapan":"A","chuong":1},{"cau":89,"dapan":"A","chuong":2},{"cau":90,"dapan":"B","chuong":2},{"cau":91,"dapan":"C","chuong":2},{"cau":92,"dapan":"D","chuong":2},{"cau":93,"dapan":"D","chuong":2},{"cau":94,"dapan":"A","chuong":2},{"cau":95,"dapan":"B","chuong":2},{"cau":96,"dapan":"B","chuong":2},{"cau":97,"dapan":"A","chuong":2},{"cau":98,"dapan":"D","chuong":2},{"cau":99,"dapan":"A","chuong":2},{"cau":100,"dapan":"B","chuong":2},{"cau":101,"dapan":"B","chuong":2},{"cau":102,"dapan":"B","chuong":2},{"cau":103,"dapan":"B","chuong":2},{"cau":104,"dapan":"D","chuong":2},{"cau":105,"dapan":"C","chuong":2},{"cau":106,"dapan":"D","chuong":2},{"cau":107,"dapan":"D","chuong":2},{"cau":108,"dapan":"D","chuong":2},{"cau":109,"dapan":"C","chuong":2},{"cau":110,"dapan":"B","chuong":2},{"cau":111,"dapan":"C","chuong":2},{"cau":112,"dapan":"A","chuong":2},{"cau":113,"dapan":"D","chuong":2},{"cau":114,"dapan":"A","chuong":2},{"cau":115,"dapan":"D","chuong":2},{"cau":116,"dapan":"D","chuong":2},{"cau":117,"dapan":"D","chuong":2},{"cau":118,"dapan":"A","chuong":2},{"cau":119,"dapan":"D","chuong":2},{"cau":120,"dapan":"C","chuong":2},{"cau":121,"dapan":"C","chuong":2},{"cau":122,"dapan":"A","chuong":2},{"cau":123,"dapan":"C","chuong":2},{"cau":124,"dapan":"D","chuong":2},{"cau":125,"dapan":"A","chuong":2},{"cau":126,"dapan":"C","chuong":2},{"cau":127,"dapan":"B","chuong":2},{"cau":128,"dapan":"A","chuong":2},{"cau":129,"dapan":"A","chuong":2},{"cau":130,"dapan":"B","chuong":2},{"cau":131,"dapan":"A","chuong":2},{"cau":132,"dapan":"D","chuong":2},{"cau":133,"dapan":"C","chuong":2},{"cau":134,"dapan":"A","chuong":2},{"cau":135,"dapan":"D","chuong":2},{"cau":136,"dapan":"A","chuong":2},{"cau":137,"dapan":"D","chuong":2},{"cau":138,"dapan":"D","chuong":2},{"cau":139,"dapan":"C","chuong":2},{"cau":140,"dapan":"B","chuong":2},{"cau":141,"dapan":"C","chuong":2},{"cau":142,"dapan":"D","chuong":2},{"cau":143,"dapan":"D","chuong":2},{"cau":144,"dapan":"C","chuong":2},{"cau":145,"dapan":"B","chuong":2},{"cau":146,"dapan":"B","chuong":2},{"cau":147,"dapan":"D","chuong":2},{"cau":148,"dapan":"B","chuong":3},{"cau":149,"dapan":"A","chuong":3},{"cau":150,"dapan":"C","chuong":3},{"cau":151,"dapan":"B","chuong":3},{"cau":152,"dapan":"A","chuong":3},{"cau":153,"dapan":"B","chuong":3},{"cau":154,"dapan":"B","chuong":3},{"cau":155,"dapan":"D","chuong":3},{"cau":156,"dapan":"A","chuong":3},{"cau":157,"dapan":"D","chuong":3},{"cau":158,"dapan":"C","chuong":3},{"cau":159,"dapan":"D","chuong":3},{"cau":160,"dapan":"D","chuong":3},{"cau":161,"dapan":"D","chuong":3},{"cau":162,"dapan":"C","chuong":3},{"cau":163,"dapan":"B","chuong":3},{"cau":164,"dapan":"B","chuong":3},{"cau":165,"dapan":"A","chuong":3},{"cau":166,"dapan":"C","chuong":3},{"cau":167,"dapan":"D","chuong":3},{"cau":168,"dapan":"B","chuong":3},{"cau":169,"dapan":"B","chuong":3},{"cau":170,"dapan":"C","chuong":3},{"cau":171,"dapan":"D","chuong":3},{"cau":172,"dapan":"D","chuong":3},{"cau":173,"dapan":"C","chuong":3},{"cau":174,"dapan":"A","chuong":3},{"cau":175,"dapan":"B","chuong":3},{"cau":176,"dapan":"A","chuong":3},{"cau":177,"dapan":"D","chuong":3},{"cau":178,"dapan":"A","chuong":3},{"cau":179,"dapan":"B","chuong":3},{"cau":180,"dapan":"A","chuong":3},{"cau":181,"dapan":"A","chuong":3},{"cau":182,"dapan":"D","chuong":3},{"cau":183,"dapan":"A","chuong":3},{"cau":184,"dapan":"B","chuong":3},{"cau":185,"dapan":"A","chuong":3},{"cau":186,"dapan":"C","chuong":3},{"cau":187,"dapan":"B","chuong":3},{"cau":188,"dapan":"B","chuong":3},{"cau":189,"dapan":"C","chuong":3},{"cau":190,"dapan":"A","chuong":3},{"cau":191,"dapan":"D","chuong":3},{"cau":192,"dapan":"B","chuong":3},{"cau":193,"dapan":"B","chuong":3},{"cau":194,"dapan":"B","chuong":3},{"cau":195,"dapan":"D","chuong":3},{"cau":196,"dapan":"C","chuong":3},{"cau":197,"dapan":"C","chuong":3},{"cau":198,"dapan":"C","chuong":3},{"cau":199,"dapan":"C","chuong":3},{"cau":200,"dapan":"A","chuong":3},{"cau":201,"dapan":"C","chuong":3},{"cau":202,"dapan":"A","chuong":3},{"cau":203,"dapan":"A","chuong":3},{"cau":204,"dapan":"D","chuong":3},{"cau":205,"dapan":"B","chuong":3},{"cau":206,"dapan":"A","chuong":3},{"cau":207,"dapan":"A","chuong":3},{"cau":208,"dapan":"D","chuong":3},{"cau":209,"dapan":"C","chuong":3},{"cau":210,"dapan":"D","chuong":3},{"cau":211,"dapan":"B","chuong":3},{"cau":212,"dapan":"D","chuong":3},{"cau":213,"dapan":"C","chuong":3},{"cau":214,"dapan":"B","chuong":3},{"cau":215,"dapan":"D","chuong":3},{"cau":216,"dapan":"A","chuong":3},{"cau":217,"dapan":"A","chuong":3},{"cau":218,"dapan":"C","chuong":3},{"cau":219,"dapan":"A","chuong":3},{"cau":220,"dapan":"C","chuong":3},{"cau":221,"dapan":"D","chuong":3},{"cau":222,"dapan":"C","chuong":3},{"cau":223,"dapan":"D","chuong":3},{"cau":224,"dapan":"A","chuong":3},{"cau":225,"dapan":"A","chuong":3},{"cau":226,"dapan":"D","chuong":3},{"cau":227,"dapan":"B","chuong":4},{"cau":228,"dapan":"D","chuong":4},{"cau":229,"dapan":"B","chuong":4},{"cau":230,"dapan":"B","chuong":4},{"cau":231,"dapan":"A","chuong":4},{"cau":232,"dapan":"C","chuong":4},{"cau":233,"dapan":"C","chuong":4},{"cau":234,"dapan":"D","chuong":4},{"cau":235,"dapan":"C","chuong":4},{"cau":236,"dapan":"B","chuong":4},{"cau":237,"dapan":"D","chuong":4},{"cau":238,"dapan":"C","chuong":4},{"cau":239,"dapan":"C","chuong":4},{"cau":240,"dapan":"A","chuong":4},{"cau":241,"dapan":"C","chuong":4},{"cau":242,"dapan":"C","chuong":4},{"cau":243,"dapan":"D","chuong":4},{"cau":244,"dapan":"A","chuong":4},{"cau":245,"dapan":"D","chuong":4},{"cau":246,"dapan":"C","chuong":4},{"cau":247,"dapan":"D","chuong":4},{"cau":248,"dapan":"B","chuong":4},{"cau":249,"dapan":"D","chuong":4},{"cau":250,"dapan":"A","chuong":4},{"cau":251,"dapan":"C","chuong":4},{"cau":252,"dapan":"D","chuong":4},{"cau":253,"dapan":"C","chuong":4},{"cau":254,"dapan":"C","chuong":4},{"cau":255,"dapan":"D","chuong":4},{"cau":256,"dapan":"A","chuong":4},{"cau":257,"dapan":"B","chuong":4},{"cau":258,"dapan":"D","chuong":4},{"cau":259,"dapan":"C","chuong":4},{"cau":260,"dapan":"B","chuong":4},{"cau":261,"dapan":"B","chuong":4},{"cau":262,"dapan":"C","chuong":4},{"cau":263,"dapan":"C","chuong":4},{"cau":264,"dapan":"B","chuong":4},{"cau":265,"dapan":"B","chuong":4},{"cau":266,"dapan":"C","chuong":4},{"cau":267,"dapan":"A","chuong":4},{"cau":268,"dapan":"A","chuong":4},{"cau":269,"dapan":"D","chuong":4},{"cau":270,"dapan":"B","chuong":4},{"cau":271,"dapan":"A","chuong":4},{"cau":272,"dapan":"B","chuong":4},{"cau":273,"dapan":"D","chuong":4},{"cau":274,"dapan":"B","chuong":4},{"cau":275,"dapan":"A","chuong":4},{"cau":276,"dapan":"A","chuong":4},{"cau":277,"dapan":"B","chuong":4},{"cau":278,"dapan":"B","chuong":4},{"cau":279,"dapan":"B","chuong":4},{"cau":280,"dapan":"B","chuong":5},{"cau":281,"dapan":"D","chuong":5},{"cau":282,"dapan":"C","chuong":5},{"cau":283,"dapan":"C","chuong":5},{"cau":284,"dapan":"C","chuong":5},{"cau":285,"dapan":"C","chuong":5},{"cau":286,"dapan":"A","chuong":5},{"cau":287,"dapan":"B","chuong":5},{"cau":288,"dapan":"D","chuong":5},{"cau":289,"dapan":"D","chuong":5},{"cau":290,"dapan":"C","chuong":5},{"cau":291,"dapan":"D","chuong":5},{"cau":292,"dapan":"A","chuong":5},{"cau":293,"dapan":"C","chuong":5},{"cau":294,"dapan":"A","chuong":5},{"cau":295,"dapan":"D","chuong":5},{"cau":296,"dapan":"B","chuong":5},{"cau":297,"dapan":"B","chuong":5},{"cau":298,"dapan":"B","chuong":5},{"cau":299,"dapan":"A","chuong":5},{"cau":300,"dapan":"D","chuong":5},{"cau":301,"dapan":"D","chuong":5},{"cau":302,"dapan":"B","chuong":5},{"cau":303,"dapan":"A","chuong":5},{"cau":304,"dapan":"C","chuong":5},{"cau":305,"dapan":"C","chuong":5},{"cau":306,"dapan":"B","chuong":5},{"cau":307,"dapan":"A","chuong":5},{"cau":308,"dapan":"D","chuong":5},{"cau":309,"dapan":"B","chuong":5},{"cau":310,"dapan":"D","chuong":5},{"cau":311,"dapan":"D","chuong":5},{"cau":312,"dapan":"C","chuong":5},{"cau":313,"dapan":"B","chuong":5},{"cau":314,"dapan":"C","chuong":5},{"cau":315,"dapan":"A","chuong":5},{"cau":316,"dapan":"D","chuong":5},{"cau":317,"dapan":"C","chuong":5},{"cau":318,"dapan":"B","chuong":5},{"cau":319,"dapan":"D","chuong":5},{"cau":320,"dapan":"B","chuong":5},{"cau":321,"dapan":"B","chuong":5},{"cau":322,"dapan":"D","chuong":5},{"cau":323,"dapan":"C","chuong":5},{"cau":324,"dapan":"A","chuong":5},{"cau":325,"dapan":"A","chuong":5},{"cau":326,"dapan":"C","chuong":5},{"cau":327,"dapan":"B","chuong":5},{"cau":328,"dapan":"C","chuong":5},{"cau":329,"dapan":"B","chuong":5},{"cau":330,"dapan":"D","chuong":5},{"cau":331,"dapan":"C","chuong":5},{"cau":332,"dapan":"D","chuong":5},{"cau":333,"dapan":"A","chuong":5},{"cau":334,"dapan":"B","chuong":5},{"cau":335,"dapan":"B","chuong":5},{"cau":336,"dapan":"D","chuong":5},{"cau":337,"dapan":"D","chuong":5},{"cau":338,"dapan":"B","chuong":5},{"cau":339,"dapan":"C","chuong":5},{"cau":340,"dapan":"A","chuong":5},{"cau":341,"dapan":"","chuong":5},{"cau":342,"dapan":"A","chuong":5},{"cau":343,"dapan":"A","chuong":5},{"cau":344,"dapan":"B","chuong":5},{"cau":345,"dapan":"B","chuong":5},{"cau":346,"dapan":"D","chuong":5},{"cau":347,"dapan":"A","chuong":5},{"cau":348,"dapan":"B","chuong":5},{"cau":349,"dapan":"A","chuong":5},{"cau":350,"dapan":"B","chuong":5},{"cau":351,"dapan":"C","chuong":5},{"cau":352,"dapan":"C","chuong":5},{"cau":353,"dapan":"A","chuong":5},{"cau":354,"dapan":"B","chuong":5},{"cau":355,"dapan":"B","chuong":5},{"cau":356,"dapan":"C","chuong":5},{"cau":357,"dapan":"B","chuong":5},{"cau":358,"dapan":"B","chuong":5},{"cau":359,"dapan":"D","chuong":5},{"cau":360,"dapan":"D","chuong":5},{"cau":361,"dapan":"A","chuong":5},{"cau":362,"dapan":"A","chuong":5},{"cau":363,"dapan":"A","chuong":5},{"cau":364,"dapan":"D","chuong":5},{"cau":365,"dapan":"B","chuong":5},{"cau":366,"dapan":"A","chuong":5},{"cau":367,"dapan":"A","chuong":5},{"cau":368,"dapan":"C","chuong":5},{"cau":369,"dapan":"D","chuong":6},{"cau":370,"dapan":"D","chuong":6},{"cau":371,"dapan":"B","chuong":6},{"cau":372,"dapan":"D","chuong":6},{"cau":373,"dapan":"D","chuong":6},{"cau":374,"dapan":"C","chuong":6},{"cau":375,"dapan":"C","chuong":6},{"cau":376,"dapan":"B","chuong":6},{"cau":377,"dapan":"A","chuong":6},{"cau":378,"dapan":"D","chuong":6},{"cau":379,"dapan":"D","chuong":6},{"cau":380,"dapan":"A","chuong":6},{"cau":381,"dapan":"A","chuong":6},{"cau":382,"dapan":"B","chuong":6},{"cau":383,"dapan":"C","chuong":6},{"cau":384,"dapan":"A","chuong":6},{"cau":385,"dapan":"","chuong":6},{"cau":386,"dapan":"B","chuong":6},{"cau":387,"dapan":"A","chuong":6},{"cau":388,"dapan":"D","chuong":6},{"cau":389,"dapan":"A","chuong":6},{"cau":390,"dapan":"B","chuong":6},{"cau":391,"dapan":"B","chuong":6},{"cau":392,"dapan":"D","chuong":6},{"cau":393,"dapan":"A","chuong":6},{"cau":394,"dapan":"B","chuong":6},{"cau":395,"dapan":"C","chuong":6},{"cau":396,"dapan":"B","chuong":6},{"cau":397,"dapan":"A","chuong":6},{"cau":398,"dapan":"A","chuong":6},{"cau":399,"dapan":"B","chuong":6},{"cau":400,"dapan":"A","chuong":6},{"cau":401,"dapan":"D","chuong":6},{"cau":402,"dapan":"D","chuong":6},{"cau":403,"dapan":"D","chuong":6},{"cau":404,"dapan":"C","chuong":6},{"cau":405,"dapan":"C","chuong":6},{"cau":406,"dapan":"A","chuong":6},{"cau":407,"dapan":"A","chuong":6},{"cau":408,"dapan":"B","chuong":6},{"cau":409,"dapan":"D","chuong":6},{"cau":410,"dapan":"A","chuong":6},{"cau":411,"dapan":"A","chuong":6},{"cau":412,"dapan":"D","chuong":6},{"cau":413,"dapan":"A","chuong":6},{"cau":414,"dapan":"B","chuong":6},{"cau":415,"dapan":"B","chuong":6},{"cau":416,"dapan":"A","chuong":6},{"cau":417,"dapan":"B","chuong":6},{"cau":418,"dapan":"B","chuong":6},{"cau":419,"dapan":"A","chuong":6},{"cau":420,"dapan":"C","chuong":6},{"cau":421,"dapan":"D","chuong":6},{"cau":422,"dapan":"C","chuong":6},{"cau":423,"dapan":"D","chuong":6},{"cau":424,"dapan":"A","chuong":6},{"cau":425,"dapan":"D","chuong":6},{"cau":426,"dapan":"D","chuong":6},{"cau":427,"dapan":"A","chuong":6},{"cau":428,"dapan":"A","chuong":6},{"cau":429,"dapan":"D","chuong":6},{"cau":430,"dapan":"D","chuong":6},{"cau":431,"dapan":"C","chuong":6},{"cau":432,"dapan":"D","chuong":6},{"cau":433,"dapan":"C","chuong":6},{"cau":434,"dapan":"A","chuong":7},{"cau":435,"dapan":"B","chuong":7},{"cau":436,"dapan":"C","chuong":7},{"cau":437,"dapan":"B","chuong":7},{"cau":438,"dapan":"A","chuong":7},{"cau":439,"dapan":"D","chuong":7},{"cau":440,"dapan":"A","chuong":7},{"cau":441,"dapan":"B","chuong":7},{"cau":442,"dapan":"B","chuong":7},{"cau":443,"dapan":"A","chuong":7},{"cau":444,"dapan":"C","chuong":7},{"cau":445,"dapan":"B","chuong":7},{"cau":446,"dapan":"B","chuong":7},{"cau":447,"dapan":"C","chuong":7},{"cau":448,"dapan":"D","chuong":7},{"cau":449,"dapan":"B","chuong":7},{"cau":450,"dapan":"C","chuong":7},{"cau":451,"dapan":"B","chuong":7},{"cau":452,"dapan":"A","chuong":7},{"cau":453,"dapan":"B","chuong":7},{"cau":454,"dapan":"B","chuong":7},{"cau":455,"dapan":"B","chuong":7},{"cau":456,"dapan":"C","chuong":7},{"cau":457,"dapan":"C","chuong":7},{"cau":458,"dapan":"C","chuong":7},{"cau":459,"dapan":"C","chuong":7},{"cau":460,"dapan":"C","chuong":7},{"cau":461,"dapan":"B","chuong":7},{"cau":462,"dapan":"C","chuong":7},{"cau":463,"dapan":"A","chuong":7},{"cau":464,"dapan":"D","chuong":7},{"cau":465,"dapan":"C","chuong":7},{"cau":466,"dapan":"D","chuong":7},{"cau":467,"dapan":"A","chuong":7},{"cau":468,"dapan":"A","chuong":7},{"cau":469,"dapan":"D","chuong":7},{"cau":470,"dapan":"C","chuong":7},{"cau":471,"dapan":"D","chuong":7},{"cau":472,"dapan":"C","chuong":7},{"cau":473,"dapan":"C","chuong":7},{"cau":474,"dapan":"C","chuong":7},{"cau":475,"dapan":"A","chuong":7},{"cau":476,"dapan":"B","chuong":7},{"cau":477,"dapan":"B","chuong":7},{"cau":478,"dapan":"C","chuong":7},{"cau":479,"dapan":"D","chuong":7},{"cau":480,"dapan":"B","chuong":7},{"cau":481,"dapan":"B","chuong":7},{"cau":482,"dapan":"C","chuong":7},{"cau":483,"dapan":"B","chuong":7},{"cau":484,"dapan":"B","chuong":7},{"cau":485,"dapan":"B","chuong":7},{"cau":486,"dapan":"D","chuong":7},{"cau":487,"dapan":"A","chuong":7},{"cau":488,"dapan":"B","chuong":7},{"cau":489,"dapan":"C","chuong":7},{"cau":490,"dapan":"C","chuong":7},{"cau":491,"dapan":"D","chuong":7},{"cau":492,"dapan":"A","chuong":7},{"cau":493,"dapan":"C","chuong":7},{"cau":494,"dapan":"D","chuong":7},{"cau":495,"dapan":"D","chuong":7},{"cau":496,"dapan":"D","chuong":7},{"cau":497,"dapan":"C","chuong":7},{"cau":498,"dapan":"D","chuong":7},{"cau":499,"dapan":"B","chuong":7},{"cau":500,"dapan":"D","chuong":7},{"cau":501,"dapan":"D","chuong":7},{"cau":502,"dapan":"A","chuong":7},{"cau":503,"dapan":"D","chuong":7},{"cau":504,"dapan":"D","chuong":7},{"cau":505,"dapan":"A","chuong":7},{"cau":506,"dapan":"D","chuong":7}]';
        $data = json_decode($json);
        foreach ($data as $obj)
        {
            LythuyetLy::create(array(
                'cau' => $obj->cau,
                'dapan' => $obj->dapan,
                'chuong' => $obj->chuong,
            ));
        }
    }
}
