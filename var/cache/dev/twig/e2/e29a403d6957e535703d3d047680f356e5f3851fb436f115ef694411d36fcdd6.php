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
        $__internal_a6b93054bede8bde66aab08b8798ab571ebd595ff21711f971a7fc5e5ef7e1e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6b93054bede8bde66aab08b8798ab571ebd595ff21711f971a7fc5e5ef7e1e2->enter($__internal_a6b93054bede8bde66aab08b8798ab571ebd595ff21711f971a7fc5e5ef7e1e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_001b83fb6bd68083494c32aea01986d5f53d76fd63fba2b744d021325c6c2b47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_001b83fb6bd68083494c32aea01986d5f53d76fd63fba2b744d021325c6c2b47->enter($__internal_001b83fb6bd68083494c32aea01986d5f53d76fd63fba2b744d021325c6c2b47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_a6b93054bede8bde66aab08b8798ab571ebd595ff21711f971a7fc5e5ef7e1e2->leave($__internal_a6b93054bede8bde66aab08b8798ab571ebd595ff21711f971a7fc5e5ef7e1e2_prof);

        
        $__internal_001b83fb6bd68083494c32aea01986d5f53d76fd63fba2b744d021325c6c2b47->leave($__internal_001b83fb6bd68083494c32aea01986d5f53d76fd63fba2b744d021325c6c2b47_prof);

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
