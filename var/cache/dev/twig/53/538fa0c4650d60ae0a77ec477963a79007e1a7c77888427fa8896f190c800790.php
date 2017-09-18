<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_79a23786a19f62969fc816cefa8cdf464d5385559d80244c6cb71f531751dcfb extends Twig_Template
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
        $__internal_ca83f598057249868d2590a8385d6e8c671a4d9defb8ffeaadb69d2ccb4ed488 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca83f598057249868d2590a8385d6e8c671a4d9defb8ffeaadb69d2ccb4ed488->enter($__internal_ca83f598057249868d2590a8385d6e8c671a4d9defb8ffeaadb69d2ccb4ed488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_8c2c10bb60ef7c32acda8a4d32593fb617967210b3e805cee90511221510c7ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c2c10bb60ef7c32acda8a4d32593fb617967210b3e805cee90511221510c7ee->enter($__internal_8c2c10bb60ef7c32acda8a4d32593fb617967210b3e805cee90511221510c7ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_ca83f598057249868d2590a8385d6e8c671a4d9defb8ffeaadb69d2ccb4ed488->leave($__internal_ca83f598057249868d2590a8385d6e8c671a4d9defb8ffeaadb69d2ccb4ed488_prof);

        
        $__internal_8c2c10bb60ef7c32acda8a4d32593fb617967210b3e805cee90511221510c7ee->leave($__internal_8c2c10bb60ef7c32acda8a4d32593fb617967210b3e805cee90511221510c7ee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
