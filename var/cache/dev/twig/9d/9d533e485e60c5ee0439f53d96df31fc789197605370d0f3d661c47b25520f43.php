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
        $__internal_388889f39434327c2ed49298cb1d7d19d42e4cb3a8484941cd4a471ca60656f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_388889f39434327c2ed49298cb1d7d19d42e4cb3a8484941cd4a471ca60656f7->enter($__internal_388889f39434327c2ed49298cb1d7d19d42e4cb3a8484941cd4a471ca60656f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_1c2ca7ea43b59f7487af2ee99c4c306b30dddf2a1c18e9f18d26f37794891462 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c2ca7ea43b59f7487af2ee99c4c306b30dddf2a1c18e9f18d26f37794891462->enter($__internal_1c2ca7ea43b59f7487af2ee99c4c306b30dddf2a1c18e9f18d26f37794891462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_388889f39434327c2ed49298cb1d7d19d42e4cb3a8484941cd4a471ca60656f7->leave($__internal_388889f39434327c2ed49298cb1d7d19d42e4cb3a8484941cd4a471ca60656f7_prof);

        
        $__internal_1c2ca7ea43b59f7487af2ee99c4c306b30dddf2a1c18e9f18d26f37794891462->leave($__internal_1c2ca7ea43b59f7487af2ee99c4c306b30dddf2a1c18e9f18d26f37794891462_prof);

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
