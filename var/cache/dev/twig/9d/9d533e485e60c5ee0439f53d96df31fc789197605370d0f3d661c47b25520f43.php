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
        $__internal_907a5800567d719a82106f6f55517ba521340138a24411edd7bc3f8c9aa164fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_907a5800567d719a82106f6f55517ba521340138a24411edd7bc3f8c9aa164fd->enter($__internal_907a5800567d719a82106f6f55517ba521340138a24411edd7bc3f8c9aa164fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_1d6050d5a1bb0928dd9d6f30ae88611d7bce99c85899d40af4db86b103d343fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d6050d5a1bb0928dd9d6f30ae88611d7bce99c85899d40af4db86b103d343fa->enter($__internal_1d6050d5a1bb0928dd9d6f30ae88611d7bce99c85899d40af4db86b103d343fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_907a5800567d719a82106f6f55517ba521340138a24411edd7bc3f8c9aa164fd->leave($__internal_907a5800567d719a82106f6f55517ba521340138a24411edd7bc3f8c9aa164fd_prof);

        
        $__internal_1d6050d5a1bb0928dd9d6f30ae88611d7bce99c85899d40af4db86b103d343fa->leave($__internal_1d6050d5a1bb0928dd9d6f30ae88611d7bce99c85899d40af4db86b103d343fa_prof);

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
