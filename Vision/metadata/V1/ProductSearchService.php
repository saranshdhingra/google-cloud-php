<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1/product_search_service.proto

namespace GPBMetadata\Google\Cloud\Vision\V1;

class ProductSearchService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Vision\V1\Geometry::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a80440a33676f6f676c652f636c6f75642f766973696f6e2f76312f7072" .
            "6f647563745f7365617263685f736572766963652e70726f746f1216676f" .
            "6f676c652e636c6f75642e766973696f6e2e76311a17676f6f676c652f61" .
            "70692f636c69656e742e70726f746f1a1f676f6f676c652f6170692f6669" .
            "656c645f6265686176696f722e70726f746f1a19676f6f676c652f617069" .
            "2f7265736f757263652e70726f746f1a25676f6f676c652f636c6f75642f" .
            "766973696f6e2f76312f67656f6d657472792e70726f746f1a23676f6f67" .
            "6c652f6c6f6e6772756e6e696e672f6f7065726174696f6e732e70726f74" .
            "6f1a1b676f6f676c652f70726f746f6275662f656d7074792e70726f746f" .
            "1a20676f6f676c652f70726f746f6275662f6669656c645f6d61736b2e70" .
            "726f746f1a1f676f6f676c652f70726f746f6275662f74696d657374616d" .
            "702e70726f746f1a17676f6f676c652f7270632f7374617475732e70726f" .
            "746f22ab020a0750726f64756374120c0a046e616d651801200128091214" .
            "0a0c646973706c61795f6e616d6518022001280912130a0b646573637269" .
            "7074696f6e180320012809121d0a1070726f647563745f63617465676f72" .
            "791804200128094203e0410512400a0e70726f647563745f6c6162656c73" .
            "18052003280b32282e676f6f676c652e636c6f75642e766973696f6e2e76" .
            "312e50726f647563742e4b657956616c75651a260a084b657956616c7565" .
            "120b0a036b6579180120012809120d0a0576616c75651802200128093a5e" .
            "ea415b0a1d766973696f6e2e676f6f676c65617069732e636f6d2f50726f" .
            "64756374123a70726f6a656374732f7b70726f6a6563747d2f6c6f636174" .
            "696f6e732f7b6c6f636174696f6e7d2f70726f64756374732f7b70726f64" .
            "7563747d22fd010a0a50726f64756374536574120c0a046e616d65180120" .
            "01280912140a0c646973706c61795f6e616d6518022001280912330a0a69" .
            "6e6465785f74696d6518032001280b321a2e676f6f676c652e70726f746f" .
            "6275662e54696d657374616d704203e04103122c0a0b696e6465785f6572" .
            "726f7218042001280b32122e676f6f676c652e7270632e53746174757342" .
            "03e041033a68ea41650a20766973696f6e2e676f6f676c65617069732e63" .
            "6f6d2f50726f64756374536574124170726f6a656374732f7b70726f6a65" .
            "63747d2f6c6f636174696f6e732f7b6c6f636174696f6e7d2f70726f6475" .
            "6374536574732f7b70726f647563745f7365747d22fe010a0e5265666572" .
            "656e6365496d616765120c0a046e616d6518012001280912100a03757269" .
            "1802200128094203e0410212410a0e626f756e64696e675f706f6c797318" .
            "032003280b32242e676f6f676c652e636c6f75642e766973696f6e2e7631" .
            "2e426f756e64696e67506f6c794203e041013a8801ea4184010a24766973" .
            "696f6e2e676f6f676c65617069732e636f6d2f5265666572656e6365496d" .
            "616765125c70726f6a656374732f7b70726f6a6563747d2f6c6f63617469" .
            "6f6e732f7b6c6f636174696f6e7d2f70726f64756374732f7b70726f6475" .
            "63747d2f7265666572656e6365496d616765732f7b7265666572656e6365" .
            "5f696d6167657d229c010a1443726561746550726f647563745265717565" .
            "737412390a06706172656e741801200128094229e04102fa41230a216c6f" .
            "636174696f6e732e676f6f676c65617069732e636f6d2f4c6f636174696f" .
            "6e12350a0770726f6475637418022001280b321f2e676f6f676c652e636c" .
            "6f75642e766973696f6e2e76312e50726f647563744203e0410212120a0a" .
            "70726f647563745f696418032001280922770a134c69737450726f647563" .
            "74735265717565737412390a06706172656e741801200128094229e04102" .
            "fa41230a216c6f636174696f6e732e676f6f676c65617069732e636f6d2f" .
            "4c6f636174696f6e12110a09706167655f73697a6518022001280512120a" .
            "0a706167655f746f6b656e18032001280922620a144c69737450726f6475" .
            "637473526573706f6e736512310a0870726f647563747318012003280b32" .
            "1f2e676f6f676c652e636c6f75642e766973696f6e2e76312e50726f6475" .
            "637412170a0f6e6578745f706167655f746f6b656e18022001280922480a" .
            "1147657450726f647563745265717565737412330a046e616d6518012001" .
            "28094225e04102fa411f0a1d766973696f6e2e676f6f676c65617069732e" .
            "636f6d2f50726f64756374227e0a1455706461746550726f647563745265" .
            "717565737412350a0770726f6475637418012001280b321f2e676f6f676c" .
            "652e636c6f75642e766973696f6e2e76312e50726f647563744203e04102" .
            "122f0a0b7570646174655f6d61736b18022001280b321a2e676f6f676c65" .
            "2e70726f746f6275662e4669656c644d61736b224b0a1444656c65746550" .
            "726f647563745265717565737412330a046e616d651801200128094225e0" .
            "4102fa411f0a1d766973696f6e2e676f6f676c65617069732e636f6d2f50" .
            "726f6475637422aa010a1743726561746550726f64756374536574526571" .
            "7565737412390a06706172656e741801200128094229e04102fa41230a21" .
            "6c6f636174696f6e732e676f6f676c65617069732e636f6d2f4c6f636174" .
            "696f6e123c0a0b70726f647563745f73657418022001280b32222e676f6f" .
            "676c652e636c6f75642e766973696f6e2e76312e50726f64756374536574" .
            "4203e0410212160a0e70726f647563745f7365745f696418032001280922" .
            "7a0a164c69737450726f64756374536574735265717565737412390a0670" .
            "6172656e741801200128094229e04102fa41230a216c6f636174696f6e73" .
            "2e676f6f676c65617069732e636f6d2f4c6f636174696f6e12110a097061" .
            "67655f73697a6518022001280512120a0a706167655f746f6b656e180320" .
            "012809226c0a174c69737450726f6475637453657473526573706f6e7365" .
            "12380a0c70726f647563745f7365747318012003280b32222e676f6f676c" .
            "652e636c6f75642e766973696f6e2e76312e50726f647563745365741217" .
            "0a0f6e6578745f706167655f746f6b656e180220012809224e0a14476574" .
            "50726f647563745365745265717565737412360a046e616d651801200128" .
            "094228e04102fa41220a20766973696f6e2e676f6f676c65617069732e63" .
            "6f6d2f50726f647563745365742288010a1755706461746550726f647563" .
            "7453657452657175657374123c0a0b70726f647563745f73657418012001" .
            "280b32222e676f6f676c652e636c6f75642e766973696f6e2e76312e5072" .
            "6f647563745365744203e04102122f0a0b7570646174655f6d61736b1802" .
            "2001280b321a2e676f6f676c652e70726f746f6275662e4669656c644d61" .
            "736b22510a1744656c65746550726f647563745365745265717565737412" .
            "360a046e616d651801200128094228e04102fa41220a20766973696f6e2e" .
            "676f6f676c65617069732e636f6d2f50726f6475637453657422b6010a1b" .
            "4372656174655265666572656e6365496d6167655265717565737412350a" .
            "06706172656e741801200128094225e04102fa411f0a1d766973696f6e2e" .
            "676f6f676c65617069732e636f6d2f50726f6475637412440a0f72656665" .
            "72656e63655f696d61676518022001280b32262e676f6f676c652e636c6f" .
            "75642e766973696f6e2e76312e5265666572656e6365496d6167654203e0" .
            "4102121a0a127265666572656e63655f696d6167655f6964180320012809" .
            "227a0a1a4c6973745265666572656e6365496d6167657352657175657374" .
            "12350a06706172656e741801200128094225e04102fa411f0a1d76697369" .
            "6f6e2e676f6f676c65617069732e636f6d2f50726f6475637412110a0970" .
            "6167655f73697a6518022001280512120a0a706167655f746f6b656e1803" .
            "20012809228b010a1b4c6973745265666572656e6365496d616765735265" .
            "73706f6e736512400a107265666572656e63655f696d6167657318012003" .
            "280b32262e676f6f676c652e636c6f75642e766973696f6e2e76312e5265" .
            "666572656e6365496d61676512110a09706167655f73697a651802200128" .
            "0512170a0f6e6578745f706167655f746f6b656e18032001280922560a18" .
            "4765745265666572656e6365496d61676552657175657374123a0a046e61" .
            "6d65180120012809422ce04102fa41260a24766973696f6e2e676f6f676c" .
            "65617069732e636f6d2f5265666572656e6365496d61676522590a1b4465" .
            "6c6574655265666572656e6365496d61676552657175657374123a0a046e" .
            "616d65180120012809422ce04102fa41260a24766973696f6e2e676f6f67" .
            "6c65617069732e636f6d2f5265666572656e6365496d616765228f010a1d" .
            "41646450726f64756374546f50726f647563745365745265717565737412" .
            "360a046e616d651801200128094228e04102fa41220a20766973696f6e2e" .
            "676f6f676c65617069732e636f6d2f50726f6475637453657412360a0770" .
            "726f647563741802200128094225e04102fa411f0a1d766973696f6e2e67" .
            "6f6f676c65617069732e636f6d2f50726f647563742294010a2252656d6f" .
            "766550726f6475637446726f6d50726f6475637453657452657175657374" .
            "12360a046e616d651801200128094228e04102fa41220a20766973696f6e" .
            "2e676f6f676c65617069732e636f6d2f50726f6475637453657412360a07" .
            "70726f647563741802200128094225e04102fa411f0a1d766973696f6e2e" .
            "676f6f676c65617069732e636f6d2f50726f647563742280010a1f4c6973" .
            "7450726f6475637473496e50726f64756374536574526571756573741236" .
            "0a046e616d651801200128094228e04102fa41220a20766973696f6e2e67" .
            "6f6f676c65617069732e636f6d2f50726f6475637453657412110a097061" .
            "67655f73697a6518022001280512120a0a706167655f746f6b656e180320" .
            "012809226e0a204c69737450726f6475637473496e50726f647563745365" .
            "74526573706f6e736512310a0870726f647563747318012003280b321f2e" .
            "676f6f676c652e636c6f75642e766973696f6e2e76312e50726f64756374" .
            "12170a0f6e6578745f706167655f746f6b656e18022001280922320a1a49" .
            "6d706f727450726f6475637453657473476373536f7572636512140a0c63" .
            "73765f66696c655f75726918012001280922720a1c496d706f727450726f" .
            "6475637453657473496e707574436f6e66696712480a0a6763735f736f75" .
            "72636518012001280b32322e676f6f676c652e636c6f75642e766973696f" .
            "6e2e76312e496d706f727450726f6475637453657473476373536f757263" .
            "65480042080a06736f7572636522a6010a18496d706f727450726f647563" .
            "74536574735265717565737412390a06706172656e741801200128094229" .
            "e04102fa41230a216c6f636174696f6e732e676f6f676c65617069732e63" .
            "6f6d2f4c6f636174696f6e124f0a0c696e7075745f636f6e666967180220" .
            "01280b32342e676f6f676c652e636c6f75642e766973696f6e2e76312e49" .
            "6d706f727450726f6475637453657473496e707574436f6e6669674203e0" .
            "41022283010a19496d706f727450726f6475637453657473526573706f6e" .
            "736512400a107265666572656e63655f696d6167657318012003280b3226" .
            "2e676f6f676c652e636c6f75642e766973696f6e2e76312e526566657265" .
            "6e6365496d61676512240a08737461747573657318022003280b32122e67" .
            "6f6f676c652e7270632e5374617475732297020a1642617463684f706572" .
            "6174696f6e4d6574616461746112430a05737461746518012001280e3234" .
            "2e676f6f676c652e636c6f75642e766973696f6e2e76312e42617463684f" .
            "7065726174696f6e4d657461646174612e5374617465122f0a0b7375626d" .
            "69745f74696d6518022001280b321a2e676f6f676c652e70726f746f6275" .
            "662e54696d657374616d70122c0a08656e645f74696d6518032001280b32" .
            "1a2e676f6f676c652e70726f746f6275662e54696d657374616d7022590a" .
            "05537461746512150a1153544154455f554e535045434946494544100012" .
            "0e0a0a50524f43455353494e471001120e0a0a5355434345535346554c10" .
            "02120a0a064641494c45441003120d0a0943414e43454c4c45441004222f" .
            "0a1550726f647563745365745075726765436f6e66696712160a0e70726f" .
            "647563745f7365745f696418012001280922df010a14507572676550726f" .
            "64756374735265717565737412510a1870726f647563745f7365745f7075" .
            "7267655f636f6e66696718022001280b322d2e676f6f676c652e636c6f75" .
            "642e766973696f6e2e76312e50726f647563745365745075726765436f6e" .
            "666967480012200a1664656c6574655f6f727068616e5f70726f64756374" .
            "73180320012808480012390a06706172656e741801200128094229e04102" .
            "fa41230a216c6f636174696f6e732e676f6f676c65617069732e636f6d2f" .
            "4c6f636174696f6e120d0a05666f72636518042001280842080a06746172" .
            "67657432ed1d0a0d50726f6475637453656172636812d1010a1043726561" .
            "746550726f64756374536574122f2e676f6f676c652e636c6f75642e7669" .
            "73696f6e2e76312e43726561746550726f64756374536574526571756573" .
            "741a222e676f6f676c652e636c6f75642e766973696f6e2e76312e50726f" .
            "64756374536574226882d3e493023e222f2f76312f7b706172656e743d70" .
            "726f6a656374732f2a2f6c6f636174696f6e732f2a7d2f70726f64756374" .
            "536574733a0b70726f647563745f736574da4121706172656e742c70726f" .
            "647563745f7365742c70726f647563745f7365745f696412b4010a0f4c69" .
            "737450726f6475637453657473122e2e676f6f676c652e636c6f75642e76" .
            "6973696f6e2e76312e4c69737450726f6475637453657473526571756573" .
            "741a2f2e676f6f676c652e636c6f75642e766973696f6e2e76312e4c6973" .
            "7450726f6475637453657473526573706f6e7365224082d3e4930231122f" .
            "2f76312f7b706172656e743d70726f6a656374732f2a2f6c6f636174696f" .
            "6e732f2a7d2f70726f6475637453657473da4106706172656e7412a1010a" .
            "0d47657450726f64756374536574122c2e676f6f676c652e636c6f75642e" .
            "766973696f6e2e76312e47657450726f6475637453657452657175657374" .
            "1a222e676f6f676c652e636c6f75642e766973696f6e2e76312e50726f64" .
            "756374536574223e82d3e4930231122f2f76312f7b6e616d653d70726f6a" .
            "656374732f2a2f6c6f636174696f6e732f2a2f70726f6475637453657473" .
            "2f2a7dda41046e616d6512d3010a1055706461746550726f647563745365" .
            "74122f2e676f6f676c652e636c6f75642e766973696f6e2e76312e557064" .
            "61746550726f64756374536574526571756573741a222e676f6f676c652e" .
            "636c6f75642e766973696f6e2e76312e50726f64756374536574226a82d3" .
            "e493024a323b2f76312f7b70726f647563745f7365742e6e616d653d7072" .
            "6f6a656374732f2a2f6c6f636174696f6e732f2a2f70726f647563745365" .
            "74732f2a7d3a0b70726f647563745f736574da411770726f647563745f73" .
            "65742c7570646174655f6d61736b129b010a1044656c65746550726f6475" .
            "6374536574122f2e676f6f676c652e636c6f75642e766973696f6e2e7631" .
            "2e44656c65746550726f64756374536574526571756573741a162e676f6f" .
            "676c652e70726f746f6275662e456d707479223e82d3e49302312a2f2f76" .
            "312f7b6e616d653d70726f6a656374732f2a2f6c6f636174696f6e732f2a" .
            "2f70726f64756374536574732f2a7dda41046e616d6512b9010a0d437265" .
            "61746550726f64756374122c2e676f6f676c652e636c6f75642e76697369" .
            "6f6e2e76312e43726561746550726f64756374526571756573741a1f2e67" .
            "6f6f676c652e636c6f75642e766973696f6e2e76312e50726f6475637422" .
            "5982d3e4930237222c2f76312f7b706172656e743d70726f6a656374732f" .
            "2a2f6c6f636174696f6e732f2a7d2f70726f64756374733a0770726f6475" .
            "6374da4119706172656e742c70726f647563742c70726f647563745f6964" .
            "12a8010a0c4c69737450726f6475637473122b2e676f6f676c652e636c6f" .
            "75642e766973696f6e2e76312e4c69737450726f64756374735265717565" .
            "73741a2c2e676f6f676c652e636c6f75642e766973696f6e2e76312e4c69" .
            "737450726f6475637473526573706f6e7365223d82d3e493022e122c2f76" .
            "312f7b706172656e743d70726f6a656374732f2a2f6c6f636174696f6e73" .
            "2f2a7d2f70726f6475637473da4106706172656e741295010a0a47657450" .
            "726f6475637412292e676f6f676c652e636c6f75642e766973696f6e2e76" .
            "312e47657450726f64756374526571756573741a1f2e676f6f676c652e63" .
            "6c6f75642e766973696f6e2e76312e50726f64756374223b82d3e493022e" .
            "122c2f76312f7b6e616d653d70726f6a656374732f2a2f6c6f636174696f" .
            "6e732f2a2f70726f64756374732f2a7dda41046e616d6512bb010a0d5570" .
            "6461746550726f64756374122c2e676f6f676c652e636c6f75642e766973" .
            "696f6e2e76312e55706461746550726f64756374526571756573741a1f2e" .
            "676f6f676c652e636c6f75642e766973696f6e2e76312e50726f64756374" .
            "225b82d3e493023f32342f76312f7b70726f647563742e6e616d653d7072" .
            "6f6a656374732f2a2f6c6f636174696f6e732f2a2f70726f64756374732f" .
            "2a7d3a0770726f64756374da411370726f647563742c7570646174655f6d" .
            "61736b1292010a0d44656c65746550726f64756374122c2e676f6f676c65" .
            "2e636c6f75642e766973696f6e2e76312e44656c65746550726f64756374" .
            "526571756573741a162e676f6f676c652e70726f746f6275662e456d7074" .
            "79223b82d3e493022e2a2c2f76312f7b6e616d653d70726f6a656374732f" .
            "2a2f6c6f636174696f6e732f2a2f70726f64756374732f2a7dda41046e61" .
            "6d6512f9010a144372656174655265666572656e6365496d61676512332e" .
            "676f6f676c652e636c6f75642e766973696f6e2e76312e43726561746552" .
            "65666572656e6365496d616765526571756573741a262e676f6f676c652e" .
            "636c6f75642e766973696f6e2e76312e5265666572656e6365496d616765" .
            "22830182d3e4930251223e2f76312f7b706172656e743d70726f6a656374" .
            "732f2a2f6c6f636174696f6e732f2a2f70726f64756374732f2a7d2f7265" .
            "666572656e6365496d616765733a0f7265666572656e63655f696d616765" .
            "da4129706172656e742c7265666572656e63655f696d6167652c72656665" .
            "72656e63655f696d6167655f696412b2010a1444656c6574655265666572" .
            "656e6365496d61676512332e676f6f676c652e636c6f75642e766973696f" .
            "6e2e76312e44656c6574655265666572656e6365496d6167655265717565" .
            "73741a162e676f6f676c652e70726f746f6275662e456d707479224d82d3" .
            "e49302402a3e2f76312f7b6e616d653d70726f6a656374732f2a2f6c6f63" .
            "6174696f6e732f2a2f70726f64756374732f2a2f7265666572656e636549" .
            "6d616765732f2a7dda41046e616d6512cf010a134c697374526566657265" .
            "6e6365496d6167657312322e676f6f676c652e636c6f75642e766973696f" .
            "6e2e76312e4c6973745265666572656e6365496d61676573526571756573" .
            "741a332e676f6f676c652e636c6f75642e766973696f6e2e76312e4c6973" .
            "745265666572656e6365496d61676573526573706f6e7365224f82d3e493" .
            "0240123e2f76312f7b706172656e743d70726f6a656374732f2a2f6c6f63" .
            "6174696f6e732f2a2f70726f64756374732f2a7d2f7265666572656e6365" .
            "496d61676573da4106706172656e7412b5010a114765745265666572656e" .
            "6365496d61676512302e676f6f676c652e636c6f75642e766973696f6e2e" .
            "76312e4765745265666572656e6365496d616765526571756573741a262e" .
            "676f6f676c652e636c6f75642e766973696f6e2e76312e5265666572656e" .
            "6365496d616765224682d3e4930240123e2f76312f7b6e616d653d70726f" .
            "6a656374732f2a2f6c6f636174696f6e732f2a2f70726f64756374732f2a" .
            "2f7265666572656e6365496d616765732f2a7d12bd010a1641646450726f" .
            "64756374546f50726f6475637453657412352e676f6f676c652e636c6f75" .
            "642e766973696f6e2e76312e41646450726f64756374546f50726f647563" .
            "74536574526571756573741a162e676f6f676c652e70726f746f6275662e" .
            "456d707479225482d3e493023f223a2f76312f7b6e616d653d70726f6a65" .
            "6374732f2a2f6c6f636174696f6e732f2a2f70726f64756374536574732f" .
            "2a7d3a61646450726f647563743a012ada410c6e616d652c70726f647563" .
            "7412ca010a1b52656d6f766550726f6475637446726f6d50726f64756374" .
            "536574123a2e676f6f676c652e636c6f75642e766973696f6e2e76312e52" .
            "656d6f766550726f6475637446726f6d50726f6475637453657452657175" .
            "6573741a162e676f6f676c652e70726f746f6275662e456d707479225782" .
            "d3e4930242223d2f76312f7b6e616d653d70726f6a656374732f2a2f6c6f" .
            "636174696f6e732f2a2f70726f64756374536574732f2a7d3a72656d6f76" .
            "6550726f647563743a012ada410c6e616d652c70726f6475637412d6010a" .
            "184c69737450726f6475637473496e50726f6475637453657412372e676f" .
            "6f676c652e636c6f75642e766973696f6e2e76312e4c69737450726f6475" .
            "637473496e50726f64756374536574526571756573741a382e676f6f676c" .
            "652e636c6f75642e766973696f6e2e76312e4c69737450726f6475637473" .
            "496e50726f64756374536574526573706f6e7365224782d3e493023a1238" .
            "2f76312f7b6e616d653d70726f6a656374732f2a2f6c6f636174696f6e73" .
            "2f2a2f70726f64756374536574732f2a7d2f70726f6475637473da41046e" .
            "616d6512f4010a11496d706f727450726f647563745365747312302e676f" .
            "6f676c652e636c6f75642e766973696f6e2e76312e496d706f727450726f" .
            "6475637453657473526571756573741a1d2e676f6f676c652e6c6f6e6772" .
            "756e6e696e672e4f7065726174696f6e228d0182d3e493023b22362f7631" .
            "2f7b706172656e743d70726f6a656374732f2a2f6c6f636174696f6e732f" .
            "2a7d2f70726f64756374536574733a696d706f72743a012ada4113706172" .
            "656e742c696e7075745f636f6e666967ca41330a19496d706f727450726f" .
            "6475637453657473526573706f6e7365121642617463684f706572617469" .
            "6f6e4d6574616461746112d6010a0d507572676550726f6475637473122c" .
            "2e676f6f676c652e636c6f75642e766973696f6e2e76312e507572676550" .
            "726f6475637473526571756573741a1d2e676f6f676c652e6c6f6e677275" .
            "6e6e696e672e4f7065726174696f6e227882d3e493023722322f76312f7b" .
            "706172656e743d70726f6a656374732f2a2f6c6f636174696f6e732f2a7d" .
            "2f70726f64756374733a70757267653a012ada4106706172656e74ca412f" .
            "0a15676f6f676c652e70726f746f6275662e456d70747912164261746368" .
            "4f7065726174696f6e4d657461646174611a76ca4115766973696f6e2e67" .
            "6f6f676c65617069732e636f6dd2415b68747470733a2f2f7777772e676f" .
            "6f676c65617069732e636f6d2f617574682f636c6f75642d706c6174666f" .
            "726d2c68747470733a2f2f7777772e676f6f676c65617069732e636f6d2f" .
            "617574682f636c6f75642d766973696f6e4281010a1a636f6d2e676f6f67" .
            "6c652e636c6f75642e766973696f6e2e7631421950726f64756374536561" .
            "7263685365727669636550726f746f50015a3c676f6f676c652e676f6c61" .
            "6e672e6f72672f67656e70726f746f2f676f6f676c65617069732f636c6f" .
            "75642f766973696f6e2f76313b766973696f6ef80101a202044743564e62" .
            "0670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

