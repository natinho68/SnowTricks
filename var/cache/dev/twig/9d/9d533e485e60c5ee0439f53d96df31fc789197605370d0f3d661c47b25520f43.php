<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_504232e7e0b5c35cd6b8f37d92abd4e08eeba9aeaad073b13d027a6fe6d6db94 extends Twig_Template
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
        $__internal_21f2c2ca16fb0b050b38e0dd7776d5a8418e0c1e6a729bad6f780c7ac9445d88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21f2c2ca16fb0b050b38e0dd7776d5a8418e0c1e6a729bad6f780c7ac9445d88->enter($__internal_21f2c2ca16fb0b050b38e0dd7776d5a8418e0c1e6a729bad6f780c7ac9445d88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_4c45c43c40fb63c9916f70a5530179d2290aab50579826a864f2d55421086df1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c45c43c40fb63c9916f70a5530179d2290aab50579826a864f2d55421086df1->enter($__internal_4c45c43c40fb63c9916f70a5530179d2290aab50579826a864f2d55421086df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_21f2c2ca16fb0b050b38e0dd7776d5a8418e0c1e6a729bad6f780c7ac9445d88->leave($__internal_21f2c2ca16fb0b050b38e0dd7776d5a8418e0c1e6a729bad6f780c7ac9445d88_prof);

        
        $__internal_4c45c43c40fb63c9916f70a5530179d2290aab50579826a864f2d55421086df1->leave($__internal_4c45c43c40fb63c9916f70a5530179d2290aab50579826a864f2d55421086df1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
