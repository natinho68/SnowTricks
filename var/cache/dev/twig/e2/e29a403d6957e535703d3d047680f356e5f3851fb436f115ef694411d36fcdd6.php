<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_400140564fe7c0f57636f821a8d903e35b349bf7f883f0efa1e61139e7c8f527 extends Twig_Template
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
        $__internal_b48e26c2e98d23a7ad4808a10f417840230f1071028fc66c8dfbc20bb0c72603 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b48e26c2e98d23a7ad4808a10f417840230f1071028fc66c8dfbc20bb0c72603->enter($__internal_b48e26c2e98d23a7ad4808a10f417840230f1071028fc66c8dfbc20bb0c72603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_b516db40a1a33db3d3cf5f16b5bdc7422b9a851c0799e664168621de5d3aade0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b516db40a1a33db3d3cf5f16b5bdc7422b9a851c0799e664168621de5d3aade0->enter($__internal_b516db40a1a33db3d3cf5f16b5bdc7422b9a851c0799e664168621de5d3aade0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_b48e26c2e98d23a7ad4808a10f417840230f1071028fc66c8dfbc20bb0c72603->leave($__internal_b48e26c2e98d23a7ad4808a10f417840230f1071028fc66c8dfbc20bb0c72603_prof);

        
        $__internal_b516db40a1a33db3d3cf5f16b5bdc7422b9a851c0799e664168621de5d3aade0->leave($__internal_b516db40a1a33db3d3cf5f16b5bdc7422b9a851c0799e664168621de5d3aade0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
