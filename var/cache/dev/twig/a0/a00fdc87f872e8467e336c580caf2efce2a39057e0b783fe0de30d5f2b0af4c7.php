<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_2624ebf23c87beda8ecb2b017b0021a66ea15cecd5db003562c3967f6bd31e44 extends Twig_Template
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
        $__internal_f044b6b41cfef317380f5ea7e8fcb99e0d94f8d477cf88ee6dad67f3a84e3a79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f044b6b41cfef317380f5ea7e8fcb99e0d94f8d477cf88ee6dad67f3a84e3a79->enter($__internal_f044b6b41cfef317380f5ea7e8fcb99e0d94f8d477cf88ee6dad67f3a84e3a79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_8985cd18eac9a6b929aa4c07d7a78f9246ad971bf38b00ecae387c185d4c952d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8985cd18eac9a6b929aa4c07d7a78f9246ad971bf38b00ecae387c185d4c952d->enter($__internal_8985cd18eac9a6b929aa4c07d7a78f9246ad971bf38b00ecae387c185d4c952d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_f044b6b41cfef317380f5ea7e8fcb99e0d94f8d477cf88ee6dad67f3a84e3a79->leave($__internal_f044b6b41cfef317380f5ea7e8fcb99e0d94f8d477cf88ee6dad67f3a84e3a79_prof);

        
        $__internal_8985cd18eac9a6b929aa4c07d7a78f9246ad971bf38b00ecae387c185d4c952d->leave($__internal_8985cd18eac9a6b929aa4c07d7a78f9246ad971bf38b00ecae387c185d4c952d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
