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
        $__internal_d7bb66a3ce57746fbf035c25c397776f512379d74bf46aa4d2e2a65727d8baa3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7bb66a3ce57746fbf035c25c397776f512379d74bf46aa4d2e2a65727d8baa3->enter($__internal_d7bb66a3ce57746fbf035c25c397776f512379d74bf46aa4d2e2a65727d8baa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_4deab07b95f9c578ef266d59fb4534deda5c38102930b07ce21d06c2f92a51a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4deab07b95f9c578ef266d59fb4534deda5c38102930b07ce21d06c2f92a51a4->enter($__internal_4deab07b95f9c578ef266d59fb4534deda5c38102930b07ce21d06c2f92a51a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d7bb66a3ce57746fbf035c25c397776f512379d74bf46aa4d2e2a65727d8baa3->leave($__internal_d7bb66a3ce57746fbf035c25c397776f512379d74bf46aa4d2e2a65727d8baa3_prof);

        
        $__internal_4deab07b95f9c578ef266d59fb4534deda5c38102930b07ce21d06c2f92a51a4->leave($__internal_4deab07b95f9c578ef266d59fb4534deda5c38102930b07ce21d06c2f92a51a4_prof);

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
