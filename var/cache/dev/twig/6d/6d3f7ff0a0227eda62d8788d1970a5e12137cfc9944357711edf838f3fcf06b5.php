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
        $__internal_b88f21fb80a9606b6554e016b36df6668cb46b68ca8748dd604175c30c47f6c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b88f21fb80a9606b6554e016b36df6668cb46b68ca8748dd604175c30c47f6c3->enter($__internal_b88f21fb80a9606b6554e016b36df6668cb46b68ca8748dd604175c30c47f6c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_c7a709ef523d8e68b9f9f5c451f9b18e73353350643a3ed7a82505316307b1b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7a709ef523d8e68b9f9f5c451f9b18e73353350643a3ed7a82505316307b1b1->enter($__internal_c7a709ef523d8e68b9f9f5c451f9b18e73353350643a3ed7a82505316307b1b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_b88f21fb80a9606b6554e016b36df6668cb46b68ca8748dd604175c30c47f6c3->leave($__internal_b88f21fb80a9606b6554e016b36df6668cb46b68ca8748dd604175c30c47f6c3_prof);

        
        $__internal_c7a709ef523d8e68b9f9f5c451f9b18e73353350643a3ed7a82505316307b1b1->leave($__internal_c7a709ef523d8e68b9f9f5c451f9b18e73353350643a3ed7a82505316307b1b1_prof);

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
