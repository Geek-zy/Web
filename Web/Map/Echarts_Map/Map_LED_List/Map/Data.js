
var myDate = new Date();
var Date_Time = myDate.getFullYear() - 1;

var Json_Data;

function GET_Json_Data() {

	    $.ajax({

			    url:"http://192.168.1.30/Map/API/Map_Hosp.php",
		        type:"get",
		        async:false,
		        dataType:"json",

		        success:function(data){

					            Json_Data = data;
								        },  
		    
		        error:function(data){
					    
					            console.log(data);
								        }   
		    }); 
}

GET_Json_Data();

//二附院
var Data_2 = Json_Data[2].patientcount;
//分宜
var Data_8 = Json_Data[8].patientcount;
//北京天坛
var Data_13 = Json_Data[13].patientcount;
//铅山县
var Data_14 = Json_Data[14].patientcount;
//乐安县人民医院
var Data_15 = Json_Data[15].patientcount;
//宜春市中医院
var Data_16 = Json_Data[16].patientcount;
//永丰县人民医院
var Data_19 = Json_Data[19].patientcount;
//信丰县人民医院
var Data_20 = Json_Data[20].patientcount;
//上高县中医院
var Data_21 = Json_Data[21].patientcount;
//九江学院附属医院
var Data_22 = Json_Data[22].patientcount;
//婺源县人民医院
var Data_25 = Json_Data[25].patientcount;
//江西省安福县人民医院
var Data_27 = Json_Data[27].patientcount;
//湖口县人民医院
var Data_28 = Json_Data[28].patientcount;
//玉山县人民医院
var Data_29 = Json_Data[29].patientcount;
//玉山县中医院
var Data_30 = Json_Data[30].patientcount;
//瑞金市人民医院
var Data_31 = Json_Data[31].patientcount;
//德兴市中医院
var Data_32 = Json_Data[32].patientcount;
//赣州市第五人民医院
var Data_33 = Json_Data[33].patientcount;
//安远县人民医院
var Data_34 = Json_Data[34].patientcount;
//高安市中医院
var Data_40 = Json_Data[40].patientcount;
//广丰县人民医院
var Data_41 = Json_Data[41].patientcount;
//江西省余干县中医院
var Data_44 = Json_Data[44].patientcount;
//江西省余干楚东医院
var Data_45 = Json_Data[45].patientcount;
//万安县人民医院
var Data_47 = Json_Data[47].patientcount;
//万安县中医院
var Data_48 = Json_Data[48].patientcount;
//南昌进贤中医院
var Data_49 = Json_Data[49].patientcount;
//上饶县人民医院
var Data_50 = Json_Data[50].patientcount;
//南昌市新建县人民医院
var Data_51 = Json_Data[51].patientcount;
//江西南丰县人民医院
var Data_52 = Json_Data[52].patientcount;
//赣州寻乌人民医院
var Data_54 = Json_Data[54].patientcount;
//赣州市妇幼保健院
var Data_66 = Json_Data[66].patientcount;
//永丰县中医院
var Data_67 = Json_Data[67].patientcount;
//兴国县第二医院
var Data_70 = Json_Data[70].patientcount;
//兴国县第二医院
var Data_72 = Json_Data[72].patientcount;
//修水中医院
var Data_73 = Json_Data[73].patientcount;
//北京房山中医院
var Data_74 = Json_Data[74].patientcount;
//余干县人民医院
var Data_75 = Json_Data[75].patientcount;
//鄱阳县人民医院
var Data_76 = Json_Data[76].patientcount;
//余江县人民医院
var Data_79 = Json_Data[79].patientcount;
//海拉尔农垦总医院
var Data_81 = Json_Data[81].patientcount;
//八仙筒镇卫生院
var Data_82 = Json_Data[82].patientcount;
//库伦旗医院
var Data_83 = Json_Data[83].patientcount;
//景德镇第二人民医院
var Data_86 = Json_Data[86].patientcount;
//分宜县洞村乡卫生院
var Data_100 = Json_Data[100].patientcount;
//景德镇第三人民医院
var Data_104 = Json_Data[104].patientcount;
//通辽市精神卫生中心
var Data_107 = Json_Data[107].patientcount;
//彭泽县人民医院
var Data_108 = Json_Data[108].patientcount;
//万年县人民医院
var Data_109 = Json_Data[109].patientcount;
//分宜县操场乡卫生院
var Data_110 = Json_Data[110].patientcount;
//九江县人民医院
var Data_112 = Json_Data[112].patientcount;
//万年县中医院
var Data_113 = Json_Data[113].patientcount;
//内蒙古赤峰松山医院
var Data_114 = Json_Data[114].patientcount;
//崇仁县人民医院
var Data_115 = Json_Data[115].patientcount;
//洪都中医院
var Data_116 = Json_Data[116].patientcount;
//德州十三局医院
var Data_117 = Json_Data[117].patientcount;
//分宜县双林镇卫生院
var Data_119 = Json_Data[119].patientcount;
//吉安县中医院
var Data_121 = Json_Data[121].patientcount;
//赤峰市巴林左旗医院
var Data_123 = Json_Data[123].patientcount;
//德兴市人民医院
var Data_136 = Json_Data[136].patientcount;
//兴国县人民医院
var Data_137 = Json_Data[137].patientcount;
//兴国县高兴中心卫生院
var Data_138 = Json_Data[138].patientcount;
//兴国县均村中心卫生院
var Data_139 = Json_Data[139].patientcount;
//兴国县江背卫生院
var Data_143 = Json_Data[143].patientcount;
//兴国县鼎龙卫生院
var Data_146 = Json_Data[146].patientcount;
//兴国县崇贤卫生院
var Data_147 = Json_Data[147].patientcount;
//兴国县良村卫生院
var Data_148 = Json_Data[148].patientcount;
//瑞昌市人民医院
var Data_152 = Json_Data[152].patientcount;
//上饶县中医院
var Data_154 = Json_Data[154].patientcount;
//永新县中医院
var Data_157 = Json_Data[157].patientcount;
//内蒙古赤峰松山中蒙医院
var Data_159 = Json_Data[159].patientcount;
//荆门市第二人民医院
var Data_160 = Json_Data[160].patientcount;
//通辽市传染病医院
var Data_161 = Json_Data[161].patientcount;
//科左中旗中医院
var Data_162 = Json_Data[162].patientcount;
//惠民县妇幼保健医院
var Data_164 = Json_Data[164].patientcount;
//内蒙古通辽市保康蒙医院
var Data_167 = Json_Data[167].patientcount;
//巴彦淖尔市杭锦后旗同济医院
var Data_170 = Json_Data[170].patientcount;
//清水河县人民医院
var Data_171 = Json_Data[171].patientcount;
//土默特左旗人民医院
var Data_172 = Json_Data[172].patientcount;
//广丰县南方医院
var Data_173 = Json_Data[173].patientcount;
//襄城县第二人民医院
var Data_176 = Json_Data[176].patientcount;
//赣州市肿瘤医院
var Data_177 = Json_Data[177].patientcount;
//内蒙古五原县人民医院
var Data_180 = Json_Data[180].patientcount;
//永修县人民医院
var Data_181 = Json_Data[181].patientcount;
//石城县人民医院
var Data_182 = Json_Data[182].patientcount;
//九江市中医院
var Data_183 = Json_Data[183].patientcount;
//瑞昌市中医院
var Data_184 = Json_Data[184].patientcount;
//丰城矿务局总医院
var Data_186 = Json_Data[186].patientcount;
//平度城区医院
var Data_187 = Json_Data[187].patientcount;
//烟台龙矿中心医院
var Data_188 = Json_Data[188].patientcount;
//察右后旗医院
var Data_190 = Json_Data[190].patientcount;
//临沂市河东区人民医院
var Data_193 = Json_Data[193].patientcount;
//湖口县中医院
var Data_199 = Json_Data[199].patientcount;
//兴国永丰卫生院
var Data_201 = Json_Data[201].patientcount;
//兴国县长岗卫生院
var Data_204 = Json_Data[204].patientcount;


require.config({
	paths: {
		//echarts: 'http://echarts.baidu.com/build/dist'
		echarts: '../../Echarts'
	}
});

require (

			[
			'echarts',
			'echarts/chart/map'
			],

			function (ec) {
				var myChart = ec.init(document.getElementById('main'));

				myChart.setOption(option);
			}
		);
