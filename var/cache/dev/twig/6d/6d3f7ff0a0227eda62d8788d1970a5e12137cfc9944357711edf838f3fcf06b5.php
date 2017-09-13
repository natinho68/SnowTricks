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
        $__internal_c929d9d51afc5d67dcc511c43c19ec399e00ed0b0ea0f07a4e04c69426a652ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c929d9d51afc5d67dcc511c43c19ec399e00ed0b0ea0f07a4e04c69426a652ca->enter($__internal_c929d9d51afc5d67dcc511c43c19ec399e00ed0b0ea0f07a4e04c69426a652ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_d72e220f6a6a13ab3a3f6006f8dfd2de52798572fa4f4630a4a4cb3d80535cd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d72e220f6a6a13ab3a3f6006f8dfd2de52798572fa4f4630a4a4cb3d80535cd5->enter($__internal_d72e220f6a6a13ab3a3f6006f8dfd2de52798572fa4f4630a4a4cb3d80535cd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_c929d9d51afc5d67dcc511c43c19ec399e00ed0b0ea0f07a4e04c69426a652ca->leave($__internal_c929d9d51afc5d67dcc511c43c19ec399e00ed0b0ea0f07a4e04c69426a652ca_prof);

        
        $__internal_d72e220f6a6a13ab3a3f6006f8dfd2de52798572fa4f4630a4a4cb3d80535cd5->leave($__internal_d72e220f6a6a13ab3a3f6006f8dfd2de52798572fa4f4630a4a4cb3d80535cd5_prof);

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
