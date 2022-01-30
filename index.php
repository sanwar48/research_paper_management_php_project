<?php
require "header.php";


?>

<link rel="stylesheet" href="styleindex.css">


<body>
  <p>The Research Management Group (RMG) was established in 1995 to improve the processing, stewardship and faculty support for sponsored awards and research administration. The resulting organization of more than 50 research administrators serves all 32 School of Medicine departments and institutes, connecting administrative expertise with institutional responsibility and policy.</p>
  <p>A careful consideration of study regarding a particular concern or problem using scientific methods. According to the American sociologist Earl Robert Babbie, “Research is a systematic inquiry to describe, explain, predict, and control the observed phenomenon. Research involves inductive and deductive methods.”

  Inductive research methods are used to analyze an observed event. Deductive methods are used to verify the observed event. Inductive approaches are associated with qualitative research and deductive methods are more commonly associated with quantitative research.

  Research is conducted with a purpose to understand:

  What do organizations or businesses really want to find out?
  What are the processes that need to be followed to chase the idea?
  What are the arguments that need to be built around a concept?
  What is the evidence that will be required for people to believe in the idea or concept?</p>
  <p>Characteristics of research
  A systematic approach must be followed for accurate data. Rules and procedures are an integral part of the process that set the objective. Researchers need to practice ethics and a code of conduct while making observations or drawing conclusions.
  Research is based on logical reasoning and involves both inductive and deductive methods.
  The data or knowledge that is derived is in real time from actual observations in natural settings.
  There is an in-depth analysis of all data collected so that there are no anomalies associated with it.
  Research creates a path for generating new questions. Existing data helps create more opportunities for research.
  Research is analytical in nature. It makes use of all the available data so that there is no ambiguity in inference.</p>



<?php





    if (isset($_SESSION['message'])) {
  $mess = $_SESSION['message'];
  echo $mess;
  session_unset();
  session_destroy();
    }
   ?>

   <footer id="footer">
   <?php  echo "Copyright@sanwarhossen"; ?>

   </footer>


</body>







<?php





 ?>
