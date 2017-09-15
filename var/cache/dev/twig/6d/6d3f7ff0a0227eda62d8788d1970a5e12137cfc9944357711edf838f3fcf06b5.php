<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_a8f888cb4b2cc6875df7ea15c13c2454f8f53a48164969c0decce1fbd844682d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2a08ffc52d528217fdbe5d1c45474a71ca5b9d4c1f77f25b9650cd362d7e576c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a08ffc52d528217fdbe5d1c45474a71ca5b9d4c1f77f25b9650cd362d7e576c->enter($__internal_2a08ffc52d528217fdbe5d1c45474a71ca5b9d4c1f77f25b9650cd362d7e576c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_7e1053c3aa5248a65386c604a6cccdf2117ef97275fcb92e00066a6d5486b8ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e1053c3aa5248a65386c604a6cccdf2117ef97275fcb92e00066a6d5486b8ae->enter($__internal_7e1053c3aa5248a65386c604a6cccdf2117ef97275fcb92e00066a6d5486b8ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_2a08ffc52d528217fdbe5d1c45474a71ca5b9d4c1f77f25b9650cd362d7e576c->leave($__internal_2a08ffc52d528217fdbe5d1c45474a71ca5b9d4c1f77f25b9650cd362d7e576c_prof);

        
        $__internal_7e1053c3aa5248a65386c604a6cccdf2117ef97275fcb92e00066a6d5486b8ae->leave($__internal_7e1053c3aa5248a65386c604a6cccdf2117ef97275fcb92e00066a6d5486b8ae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
