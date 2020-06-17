<?php

    class Timer extends CI_Model {          //On déclare la classe "Timer"

        public function __construct() {
            parent::__construct();
        }

        public function afficheTimer(){     //Fonction pour afficher le timer
            /*$builder = $this->db->select("quizz_duree
                                            FROM Quizz
                                            WHERE quizz_cle = '".$_GET['cle']."'", FALSE);
                $query = $builder->get();                           //On récupère la durée du quizz par une requête
                if($query->num_rows() > 0){                         //Si on trouve un résultat alors
                    foreach ($query->result_array() as $row){
                        $hrs = (int) ($row["quizz_duree"]/3600);
                        $min = (int) ($row["quizz_duree"]-$hrs*3600)/60;
                        $sec = (int) ($row["quizz_duree"]-$hrs*3600-$min*60);
                    }
                }
                if(!empty($hrs) || !empty($min) || !empty($sec)){
                    echo "heures : ".$hrs."<br>minutes : ".$min."<br>sec : ".$sec."<br>";
                    for(;$min >= 0; $min--){
                        echo "min = ".$min."<br>";
                        sleep(1);
                    }
                }*/
            echo "
            <script language='JavaScript1.2'>

            alert('LOL');

            function setcountdown(thehour,themin,thesec){
                hr=1;min=5;sec=0
            }

            ////////// CONFIGUREZ LE COMPTEUR CI-DESSOUS //////////////////

            // 1°) Configurez la date dans le futur dans le format HEURES sur 24h (0=minuit,23=11pm), MINUTES, SECONDES
            setcountdown(18,5,00)

            // 2°) Changez les deux textes ci-dessous. Le premier pour annoncer l'évènement, le second qui s'affichera à la fin du compte à rebours.
            var occasion='Fin du quizz'
            var message_on_occasion='Fini'

            // 3°) Configurez ci-dessous 5 variables pour la largeur, hauteur, la couleur de l'arrière plan, et le style du texte du champ
            var countdownwidth='50%' // ou une valeur en % comme var countdownwidth='95%'
            var countdownheight='12%'
            var countdownbgcolor='#FFEBCD' // ou une couleur en texte comme : lightyellow
            var opentags='<font face='Verdana'><small>'
            var closetags='</small></font>'

            ////////// NE RIEN EDITER CI-DESSOUS //////////////////

            var montharray=new Array('Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec')
            var crosscount=''

            function start_countdown(){
                if (document.layers)
                    document.countdownnsmain.visibility='show'
                else if (document.all||document.getElementById)
                    crosscount=document.getElementById&&!document.all?document.getElementById('countdownie') : countdownie
                countdown()
            }

            if (document.all||document.getElementById)
                document.write('<span id='countdownie' style='width:'+countdownwidth+'; background-color:'+countdownbgcolor+''></span>')

            window.onload=start_countdown


            function countdown(){
                var today=new Date()
                var todayy=today.getYear()
                if (todayy < 1000)
                    todayy+=1900
                var todaym=today.getMonth()
                var todayd=today.getDate()
                var todayh=today.getHours()
                var todaymin=today.getMinutes()
                var todaysec=today.getSeconds()
                var todaystring=montharray[todaym]+' '+todayd+', '+todayy+' '+todayh+':'+todaymin+':'+todaysec
                futurestring=montharray[todaym]+' '+todayd+', '+todayy+' '+hr+':'+min+':'+sec
                dd=Date.parse(futurestring)-Date.parse(todaystring)
                dhour=Math.floor((dd%(60*60*1000*24))/(60*60*1000)*1)
                dmin=Math.floor(((dd%(60*60*1000*24))%(60*60*1000))/(60*1000)*1)
                dsec=Math.floor((((dd%(60*60*1000*24))%(60*60*1000))%(60*1000))/1000*1)
                //if on day of occasion
                if(dhour<=0&&dmin<=0&&dsec<=1&&todayd==da){
                    if (document.layers){
                        document.countdownnsmain.document.countdownnssub.document.write(opentags+message_on_occasion+closetags)
                        document.countdownnsmain.document.countdownnssub.document.close()
                    }
                    else if (document.all||document.getElementById)
                        crosscount.innerHTML=opentags+message_on_occasion+closetags
                    return
                }
                //else, if not yet
                else{
                    if (document.layers){
                    document.countdownnsmain.document.countdownnssub.document.write('Il reste '+opentags+dhour+' heures, '+dmin+' minutes, et '+dsec+' secondes avant '+occasion+closetags)
                    document.countdownnsmain.document.countdownnssub.document.close()
                    }
                    else if (document.all||document.getElementById)
                        crosscount.innerHTML='Il reste '+opentags+dhour+' heures, '+dmin+' minutes, et '+dsec+' secondes avant '+occasion+closetags
                    }
                setTimeout('countdown()',1000)
            }
            </script>";
        }
    }
?>